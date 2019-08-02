<?php

namespace App\Http\Controllers;

use App\Models\Credential;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class CredentialController extends Controller
{
    //Gets templates page
    public function getTemplates() {
        $templates = Template::all();
        return view('credentials.templates', compact('templates'));
    }

    public function chooseTemplate(Request $request) {
        $request->validate([
            'template' => 'sometimes|required|integer|min:1',
        ]);

        $userId = Auth::id();

        Credential::updateOrCreate([ 'user_id' => $userId],[
            'user_id' => $userId,
            'template_id' => $request->input('template')
        ]);

        return redirect()->route('create-resume');
    }

    //Gets create-resume page
    public function createResume() {
        return view('credentials.create-resume');
    }

    //Gets resume header page
    public function header() {
        return view('credentials.header');
    }

    //Gets resume experience page
    public function experience() {
        return view('credentials.experience');
    }

    //Gets review experience page
    public function reviewExperience() {
        return view('credentials.review-experience');
    }

    //Gets education page
    public function education() {
        return view('credentials.education');
    }

    //Gets review education page
    public function reviewEducation() {
        return view('credentials.review-education');
    }

    //Gets skills page
    public function skills() {
        return view('credentials.skills');
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
