<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResumeHeader;
use App\Models\Credential;
use App\Models\Experience;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class CredentialController extends Controller
{

    const TEMPLATE = 1;

    //Gets templates page
    public function getTemplates() {
        $templates = Template::all();
        return view('credentials.templates', compact('templates'));
    }

    public function chooseTemplate(Request $request) {
        $request->validate([
            'template' => 'sometimes|required|integer|min:1',
        ]);

        $template = $request->input('template');

        Credential::updateOrCreate(['user_id' => auth()->id()], [
            'user_id' => auth()->id(),
            'template_id' => $template ? $template : self::TEMPLATE
        ]);

        return redirect()->route('create-resume');
    }

    //Gets create-resume page
    public function createResume() {
        return view('credentials.create-resume');
    }

    //Gets resume header page
    public function header() {
        $credential = Auth::user()->credential;
        return view('credentials.header', compact('credential'));
    }

    //Stores header
    public function storeHeader(StoreResumeHeader $request) {

        Credential::updateOrCreate(['user_id' => Auth::id()], request([
           'first_name', 'last_name', 'address', 'city', 'state', 'zip', 'email', 'phone'
        ]));

        $experienceCount = auth()->user()->experiences->count();

        if ($experienceCount <= 0) {
            return redirect()->route('experience.create');
        } else {
            return redirect()->route('experience.index');
        }

    }

    //Gets skills page
    public function getSkills()
    {
        $skills = auth()->user()->credential->skills;
        return view('credentials.skills', compact('skills'));
    }

    public function storeSkills(Request $request)
    {
        $request->validate([
            'skills' => 'nullable|min:5|max:3000',
        ]);

        auth()->user()->credential()->update(request(['skills']));

        return redirect()->route('summary');
    }

    //Gets summary page
    public function getSummary() {
        $summary = auth()->user()->credential->summary;
        return view('credentials.summary', compact('summary'));
    }

    public function storeSummary(Request $request)
    {
        $request->validate([
            'summary' => 'nullable|min:5|max:3000',
        ]);

        auth()->user()->credential()->update(request(['summary']));

        return redirect()->route('finalize');
    }

    //Gets finalize page
    public function finalize() {
        return view('credentials.finalize');
    }
}
