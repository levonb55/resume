<?php

namespace App\Http\Controllers;

use App\Models\ExtraCredential;
use Illuminate\Http\Request;
use Session;
use Route;


class ExtraCredentialController extends Controller
{

    const EXTRA = 1;
    const NON_EXTRA = 0;
    const RESUME_REVIEW = 'resume/review';


    //Gets add section page
    public function getAddSection()
    {
        $extraCredentials = ExtraCredential::where([
            ['user_id', auth()->id()],
            ['extra', self::EXTRA]
        ])->get();

        return view('extra-credentials.add-section', compact('extraCredentials'));
    }

    public function postAddSection(Request $request)
    {
        if ($request->has('sections')) {
            $section = $request->input('sections');
            array_unshift($section, 'add-section');
            Session::put('add-sections', $section);

            return redirect(Session::get('add-sections')[1]);
        }

        return redirect()->route(self::RESUME_REVIEW);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAccomplishments()
    {
        $accomplishments = $this->fetchSectionData('accomplishments');
        $previousSection = $this->getPreviousSection();

        return view('extra-credentials.accomplishments', compact('previousSection', 'accomplishments'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeAccomplishments(Request $request)
    {
        $this->storeSectionData($request->input('accomplishments'), 'accomplishments');

        return $this->redirectForward();
    }

    public function getProfiles()
    {
        $previousSection = $this->getPreviousSection();
        return view('extra-credentials.profiles', compact('previousSection'));
    }

    public function storeProfiles(Request $request)
    {
        return $this->redirectForward();
    }

    public function getAdditionalInfo()
    {
        $additionalInfo = $this->fetchSectionData('additional-info');
        $previousSection = $this->getPreviousSection();

        return view('extra-credentials.additional-info', compact('previousSection', 'additionalInfo'));
    }

    public function storeAdditionalInfo(Request $request)
    {
        $this->storeSectionData($request->input('additional-info'), 'additional-info');

        return $this->redirectForward();
    }

    public function getCertifications()
    {
        $certifications = $this->fetchSectionData('certifications');
        $previousSection = $this->getPreviousSection();

        return view('extra-credentials.certifications', compact('previousSection', 'certifications'));
    }

    public function storeCertifications(Request $request)
    {
        $this->storeSectionData($request->input('certifications'), 'certifications');

        return $this->redirectForward();
    }

    public function showCustomSection($custom)
    {
        $previousSection = Session::get('add-sections')[array_search('custom-section/'.$custom, Session::get('add-sections')) - 1];
        $custom = ExtraCredential::where([
            ['user_id', auth()->id()],
            ['slug', $custom]
        ])->first();

        return view('extra-credentials.custom-section', compact('custom', 'previousSection'));
    }

    public function storeCustomSection(Request $request)
    {
        $this->storeSectionData($request->input('custom-section'), $request->input('slug'), $request->input('title'));

        return $this->redirectForward($request->input('slug'));
    }

    public function addCustomSection(Request $request)
    {
        $section = auth()->user()->extraCredentials()->create([
            'title' => $request->section,
            'slug' => \Str::slug($request->section),
            'extra' => self::EXTRA
        ]);

        return response()->json(['id' => $section->id, 'title' =>  $section->title]);
    }

    public function destroyCustomSection(ExtraCredential $custom)
    {
        $custom->delete();
        return response()->json('Success');
    }

    public function fetchSectionData($section)
    {
        return ExtraCredential::where([
            ['user_id', auth()->id()],
            ['slug', $section]
        ])->first();
    }

    public function storeSectionData($request, $slug, $title = null)
    {
        auth()->user()->extraCredentials()->updateOrCreate(['slug' => $slug],[
            'title' => $title,
            'slug' => $slug,
            'content' => $request
        ]);
    }

    //Redirects forward after storing a section
    public function redirectForward($slug = null)
    {
        if($slug) {
            $currentRoute = \Route::getFacadeRoot()->current()->uri().'/'.$slug;
        } else {
            $currentRoute = \Route::getFacadeRoot()->current()->uri();
        }

        $section = Session::get('add-sections');

        if(array_search($currentRoute, $section) + 1 == count($section)) {
            $route = self::RESUME_REVIEW;
        } else {
            $route = $section[array_search($currentRoute, $section) + 1];
        }

        return redirect($route);
    }

    //Redirects back by the sections
    public function getPreviousSection()
    {
        return Session::get('add-sections')[array_search(Route::getFacadeRoot()->current()->uri(), Session::get('add-sections')) - 1];
    }

}
