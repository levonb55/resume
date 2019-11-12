<?php

namespace App\Http\Controllers;

use App\Models\CoverLetter;
use App\Models\CoverTemplate;
use Illuminate\Http\Request;

class CoverLetterController extends Controller
{
    const TEMPLATE = 1;

    public function index()
    {
        return view('cover-letter.index');
    }

    public function getTemplates()
    {
        $templates = CoverTemplate::all();
        return view('cover-letter.templates', compact('templates'));
    }

    public function chooseTemplate(Request $request) {
        $request->validate([
            'template' => 'sometimes|required|integer|min:1|max:3',
        ]);

        $template = $request->input('template');

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['template_id' => $template ?? self::TEMPLATE]
        );

        return redirect()->route('cover-letter.job');
    }

    public function getJob()
    {
        $job = auth()->user()->coverLetter->job;

        return view('cover-letter.job', compact('job'));
    }

    public function postJob(Request $request)
    {
        $request->validate([
            'job' => 'required|string|min:2|max:255'
        ]);

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['job' => $request->input('job')]
        );

        return redirect()->route('cover-letter.employer');
    }

    public function getEmployer()
    {
        $employer = auth()->user()->coverLetter->employer;

        return view('cover-letter.employer', compact('employer'));
    }

    public function postEmployer(Request $request)
    {
        $request->validate([
            'employer' => 'required|string|min:2|max:255'
        ]);

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['employer' => $request->input('employer')]
        );

        return redirect()->route('cover-letter.strengths');
    }

    public function getStrengths()
    {
        $strengths = [
            'Collaboration', 'Communication', 'Critical thinking', 'Customer service', 'Decision-making', 'Delegation',
            'Innovation', 'Interpersonal', 'Leadership', 'Management', 'Motivation', 'Observation'
        ];

        $pickedStrengths = [];
        $authUser = auth()->user();

        if($authUser->coverLetter && $authUser->coverLetter->strengths) {
            $pickedStrengths = unserialize(auth()->user()->coverLetter->strengths) ?? [];
            $strengths = array_unique(array_merge($strengths, $pickedStrengths));
        }

        return view('cover-letter.strengths', compact('strengths', 'pickedStrengths'));
    }

    public function postStrengths(Request $request)
    {
        $request->validate([
            'strengths' => 'nullable|array|min:1|max:50'
        ]);

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['strengths' => serialize($request->input('strengths'))]
        );

        return redirect()->route('cover-letter.experience');
    }

    public function getExperience()
    {
        $experience = auth()->user()->coverLetter->experience;

        return view('cover-letter.experience', compact('experience'));
    }

    public function postExperience(Request $request)
    {
        $request->validate([
            'experience' => 'required|integer|min:1|max:10'
        ]);

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['experience' => $request->input('experience')]
        );

        return redirect()->route('cover-letter.style');
    }

    public function getWorkingStyle()
    {
        $workingStyles = $this->workingStyles();

        $pickedStyles = [];
        $authUser = auth()->user();

        if($authUser->coverLetter && $authUser->coverLetter->styles) {
            $pickedStyles = unserialize(auth()->user()->coverLetter->styles) ?? [];
        }

        return view('cover-letter.working-styles', compact('workingStyles', 'pickedStyles'));
    }

    public function postWorkingStyle(Request $request)
    {
        if($styles =  $request->input('styles')) {
            if (count(array_intersect($styles, array_keys($this->workingStyles()))) !== count($styles)) {
                return back();
            }
        }

        $request->validate([
            'styles' => 'nullable|array|min:1|max:10'
        ]);

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['styles' => serialize($request->input('styles'))]
        );

        return 'Done';
    }

    public function workingStyles()
    {
        return [
            'Organizer' => 'You\'re highly detail-oriented and a stickler for rules.',
            'Leader' => 'You\'re a risk-taker who likes making decisions.',
            'Team Player' => 'You enjoy collaborating and helping others.',
            'Creator' => 'You value new ideas and a more open-minded environment.',
            'Analyzer' => 'You like to think through tasks logically.',
            'Doer' => 'You do whatever it takes to get the job done.',
            'Guardian' => 'You like stability, order, and rigor.',
            'Pioneer' => 'You value possibilities, take risks, and spark energy and imagination to your team.'
        ];
    }
}
