<?php

namespace App\Http\Controllers;

use App\Models\CoverLetter;
use App\Models\CoverTemplate;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

class CoverLetterController extends Controller
{
    const TEMPLATE = 1;
    const COMPLETE = 1;

    public function index()
    {
        return view('cover-letter.index');
    }

    public function getTemplates()
    {
        $templates = CoverTemplate::all();
        return view('cover-letter.templates', compact('templates'));
    }

    public function chooseTemplate(Request $request) {
        $request->validate([
            'template' => 'sometimes|required|integer|min:1|max:3',
        ]);

        $template = $request->input('template');

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['template_id' => $template ?? self::TEMPLATE]
        );

        return redirect()->route('cover-letter.job');
    }

    public function getJob()
    {
        $cover = auth()->user()->coverLetter;

        return view('cover-letter.job', compact('cover'));
    }

    public function postJob(Request $request)
    {
        $request->validate([
            'job' => 'required|string|min:2|max:255'
        ]);

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['job' => $request->input('job')]
        );

        return redirect()->route('cover-letter.employer');
    }

    public function getEmployer()
    {
        $cover = auth()->user()->coverLetter;

        return view('cover-letter.employer', compact('cover'));
    }

    public function searchEmployer($employer)
    {
        if(request()->ajax()) {
            $employersXML = file_get_contents('https://www.cover-letter-now.com/eb/api/v1/country/AM/employers?search_string=' . $employer);
            $employers = json_decode($employersXML, TRUE);

            return response()->json($employers);
        }

        return abort(404);
    }

    public function postEmployer(Request $request)
    {
        $request->validate([
            'employer' => 'required|string|min:2|max:255'
        ]);

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['employer' => $request->input('employer')]
        );

        return redirect()->route('cover-letter.strengths');
    }

    public function getStrengths()
    {
        $strengths = [
            'Collaboration', 'Communication', 'Critical thinking', 'Customer service', 'Decision-making', 'Delegation',
            'Innovation', 'Interpersonal', 'Leadership', 'Management', 'Motivation', 'Observation'
        ];

        $pickedStrengths = [];
        $authUser = auth()->user();

        if($authUser->coverLetter && $authUser->coverLetter->strengths) {
            $pickedStrengths = unserialize(auth()->user()->coverLetter->strengths) ?? [];
            $strengths = array_unique(array_merge($strengths, $pickedStrengths));
        }

        return view('cover-letter.strengths', compact('strengths', 'pickedStrengths'));
    }

    public function postStrengths(Request $request)
    {
        $request->validate([
            'strengths' => 'nullable|array|min:1|max:50'
        ]);

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['strengths' => serialize($request->input('strengths'))]
        );

        return redirect()->route('cover-letter.experience');
    }

    public function getExperience()
    {
        $cover = auth()->user()->coverLetter;

        return view('cover-letter.experience', compact('cover'));
    }

    public function postExperience(Request $request)
    {
        $request->validate([
            'experience' => 'required|integer|min:1|max:10'
        ]);

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['experience' => $request->input('experience')]
        );

        return redirect()->route('cover-letter.style');
    }

    public function getWorkingStyle()
    {
        $workingStyles = $this->workingStyles();

        $pickedStyles = [];
        $authUser = auth()->user();

        if($authUser->coverLetter && $authUser->coverLetter->styles) {
            $pickedStyles = unserialize(auth()->user()->coverLetter->styles) ?? [];
        }

        return view('cover-letter.working-styles', compact('workingStyles', 'pickedStyles'));
    }

    public function postWorkingStyle(Request $request)
    {
        if($styles =  $request->input('styles')) {
            if (count(array_intersect($styles, array_keys($this->workingStyles()))) !== count($styles)) {
                return back();
            }
        }

        $request->validate([
            'styles' => 'nullable|array|min:1|max:10'
        ]);

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['styles' => serialize($request->input('styles'))]
        );

        return redirect()->route('cover-letter.name');
    }

    public function workingStyles()
    {
        return [
            'Organizer' => 'You\'re highly detail-oriented and a stickler for rules.',
            'Leader' => 'You\'re a risk-taker who likes making decisions.',
            'Team Player' => 'You enjoy collaborating and helping others.',
            'Creator' => 'You value new ideas and a more open-minded environment.',
            'Analyzer' => 'You like to think through tasks logically.',
            'Doer' => 'You do whatever it takes to get the job done.',
            'Guardian' => 'You like stability, order, and rigor.',
            'Pioneer' => 'You value possibilities, take risks, and spark energy and imagination to your team.'
        ];
    }

    public function getName()
    {
        $cover = auth()->user()->coverLetter;

        return view('cover-letter.name', compact('cover'));
    }

    public function postName(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|min:1|max:255',
            'last_name' => 'required|string|min:1|max:255',
        ]);

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name')
            ]
        );

        return redirect()->route('cover-letter.review');
    }

    public function getReview()
    {
        $templates = CoverTemplate::all();
        $coverLetter = auth()->user()->coverLetter;

        if($coverLetter !== self::COMPLETE) {
            $coverLetter->update(['complete' => self::COMPLETE]);
        }

        return view('cover-letter.review',  compact('templates',  'coverLetter'));
    }

    public function updateReview(Request $request)
    {
        $request->validate([
            'template' => 'required|integer|min:1|max:3',
        ]);

        auth()->user()->coverLetter()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['template_id' => $request->input('template')]
        );

        return back();
    }

    public function downloadPdf()
    {
        $mpdf = new Mpdf();

        // Buffer the following html with PHP so we can store it to a variable later
        ob_start();

        // This is where your script would normally output the HTML using echo or print
        echo view('downloads.cover-letter')->render();

        // Now collect the output buffer into a variable
        $html = ob_get_contents();
        ob_end_clean();

        // send the captured HTML from the output buffer to the mPDF class for processing
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function downloadWord()
    {
        $userId = auth()->id();
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $html = view('components.cover-letters.template' . auth()->user()->coverLetter->template_id)->render();
        \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html, false, false);
        $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objectWriter->save(public_path('assets/downloads/cover-letter' . $userId . '.docx'));

        return response()->download(public_path('assets/downloads/cover-letter' . $userId . '.docx'), 'cover-letter.docx')
            ->deleteFileAfterSend();
    }

    public function downloadTxt()
    {
        $cover = auth()->user()->coverLetter;

        $content = view('components.cover-letters.template' . $cover->template_id)->render();
        $content = str_replace("\r\n",'', strip_tags($content));

        $headers = [
            'Content-type' => 'text/plain',
            'Content-Disposition' => sprintf('attachment; filename="%s"', "cover-letter.txt")
        ];

        return response()->make($content, 200, $headers);
    }
}
