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
//        $templates = Template::all();
//        $extraCredentials = ExtraCredential::getExtraCredentials();
//        $data = [$templates, $extraCredentials];
//        $pdf = PDF::loadView('downloads.resume', $data);
        $pdf = PDF::loadView('components.resumes.template' . auth()->user()->credential->template_id);

//        return $pdf->download('resume.pdf');
        return $pdf->stream('resume.pdf');
    }

    public function downloadResumeWord()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();

        $html = "<h4>Resume</h4>";
        \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html, false, false);
        $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objectWriter->save(public_path('assets/downloads/resume' . auth()->id() . '.docx'));

        return response()->download(public_path('assets/downloads/resume' . auth()->id() . '.docx'), 'resume.docx')
            ->deleteFileAfterSend();
    }
}
