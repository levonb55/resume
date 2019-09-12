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
        $experienceCount = auth()->user()->experiences->count();
        return view('credentials.header', compact('credential', 'experienceCount'));
    }

    //Stores header
    public function storeHeader(StoreResumeHeader $request) {

        Credential::updateOrCreate(['user_id' => Auth::id()], request([
           'first_name', 'last_name', 'address', 'city', 'state', 'zip', 'email', 'phone'
        ]));

        return redirect()->route('experience.create');
    }

    //Gets skills page
    public function getSkills()
    {
        $skills = auth()->user()->credential;
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
    public function summary() {
        return view('credentials.summary');
    }

    //Gets finalize page
    public function finalize() {
        return view('credentials.finalize');
    }
}
