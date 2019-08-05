<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResumeHeader;
use App\Models\Credential;
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

        return redirect()->route('experience');
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
