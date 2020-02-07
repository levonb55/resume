<?php

namespace App\Http\Controllers;

use App\Models\ExtraCredential;
use App\Models\Template;
use Illuminate\Http\Request;
use Mpdf\Mpdf;
use PDF;

class ResumeController extends Controller
{
    public function downloadResumePdf()
    {
//        return view('downloads.resume');
        $api_endpoint = "https://selectpdf.com/api2/convert/";
        $key = 'b9694b72-fb6b-46d2-87e4-85cb661f9cbd';
//        $test_url = 'http://greatexpertdev.site/laravel/resume-builder/public/resume/review';
//        $test_url = 'http://greatexpertdev.site/laravel/resume-builder/public/resume/review/pdf/' . request('user');
        $test_url = 'http://greatexpertdev.site/laravel/resume-builder/public/resume/review/pdf';

        $parameters = array ('key' => $key, 'url' => $test_url);
        $result = @file_get_contents("$api_endpoint?" . http_build_query($parameters));

        if (!$result) {
            echo "HTTP Response: " . $http_response_header[0] . "<br/>";

            $error = error_get_last();
            echo "Error Message: " . $error['message'];
        }
        else {
            // set HTTP response headers
            header("Content-Type: application/pdf");
            header("Content-Disposition: attachment; filename=\"resume.pdf\"");

            echo ($result);
        }







////        $templates = Template::all();
////        $extraCredentials = ExtraCredential::getExtraCredentials();
////        $data = [$templates, $extraCredentials];
////        $pdf = PDF::loadView('downloads.resume', $data);
////        $pdf = PDF::loadView('components.resumes.template' . auth()->user()->credential->template_id);
//
//        //Enabled for pdf testing
////        $pdf = PDF::loadView('downloads.resume');
////        return $pdf->stream('resume.pdf');
//
//        $mpdf = new Mpdf();
//
//        // Buffer the following html with PHP so we can store it to a variable later
//        ob_start();
//
//        // This is where your script would normally output the HTML using echo or print
//        echo view('downloads.resume')->render();
//
//        // Now collect the output buffer into a variable
//        $html = ob_get_contents();
//        ob_end_clean();
//
//        // send the captured HTML from the output buffer to the mPDF class for processing
//        $mpdf->WriteHTML($html);
//        $mpdf->Output();
//
//
//
//        $credential = auth()->user()->credential;
//
//        if($credential->pdf) {
//            $credential->update(['pdf' => --$credential->pdf]);
//            $pdf = PDF::loadView('downloads.resume');
//
//        return $pdf->download('resume.pdf');
////            return $pdf->stream('resume.pdf');
//        }
//
//        return redirect()->route('checkout')->with('payment-warning', '');
    }

    public function getResumePdf()
    {
        return view('downloads.resume');
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

    public function downloadResumeTxt()
    {
        $credential = auth()->user()->credential;

        //Enabled for txt testing
//        if($credential->txt) {
//            $credential->update(['word' => --$credential->txt]);

            $content = view('components.resumes.template' . $credential->template_id)->render();
            $content = str_replace("\r\n",'', strip_tags($content));

            $headers = [
                'Content-type' => 'text/plain',
                'Content-Disposition' => sprintf('attachment; filename="%s"', "resume.txt")
            ];

            return response()->make($content, 200, $headers);
//       }

        return redirect()->route('checkout')->with('payment-warning', '');
    }
}
