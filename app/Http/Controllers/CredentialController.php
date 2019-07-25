<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CredentialController extends Controller
{
    //Gets choose-template page
    public function chooseTemplate() {
        return view('credentials.choose-template');
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
}
