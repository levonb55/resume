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
            'template' => 'sometimes|required|integer|min:1',
        ]);

        $template = $request->input('template');

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['template_id' => $template ? $template : self::TEMPLATE]
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
        return view('cover-letter.strengths');
    }
}
