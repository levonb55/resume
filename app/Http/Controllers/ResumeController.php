<?php

namespace App\Http\Controllers;

use App\Models\ExtraCredential;
use App\Models\Template;
use Illuminate\Http\Request;
use PDF;

class ResumeController extends Controller
{
    public function downloadResumePdf()
    {
        $templates = Template::all();
        $extraCredentials = ExtraCredential::getExtraCredentials();
        $data = [$templates, $extraCredentials];
        $pdf = PDF::loadView('downloads.resume', $data);

        return $pdf->download('resume.pdf');
    }
}
