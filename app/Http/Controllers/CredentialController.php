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

    public function createHeader() {
        return view('credentials.header');
    }
}
