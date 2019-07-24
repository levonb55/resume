<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Gets Home page
    public function home() {
        return view('pages.index');
    }

    //Gets old resume page
    public function resume() {
        return view('pages.resume');
    }
}
