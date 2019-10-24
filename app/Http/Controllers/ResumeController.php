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
//        $pdf = PDF::loadView('components.resumes.template' . auth()->user()->credential->template_id);

        //Enabled for pdf testing
        $pdf = PDF::loadView('downloads.resume');
        return $pdf->stream('resume.pdf');

        $credential = auth()->user()->credential;

        if($credential->pdf) {
            $credential->update(['pdf' => --$credential->pdf]);
            $pdf = PDF::loadView('downloads.resume');

        return $pdf->download('resume.pdf');
//            return $pdf->stream('resume.pdf');
        }

        return redirect()->route('checkout')->with('payment-warning', '');
    }

    public function downloadResumeWord()
    {
        $credential = auth()->user()->credential;

        //Enabled for word testing
//        if($credential->word) {
//            $credential->update(['word' => --$credential->word]);
            $userId = auth()->id();

            $phpWord = new \PhpOffice\PhpWord\PhpWord();
            $section = $phpWord->addSection();

//            $html = "<h4>Resume</h4>";
            $html = view('components.resumes.template' . auth()->user()->credential->template_id)->render();
            \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html, false, false);
            $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
            $objectWriter->save(public_path('assets/downloads/resume' . $userId . '.docx'));

            return response()->download(public_path('assets/downloads/resume' . $userId . '.docx'), 'resume.docx')
                ->deleteFileAfterSend();
//        }

        return redirect()->route('checkout')->with('payment-warning', '');
    }
}
