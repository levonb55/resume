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
    const RESUME_REVIEW = 'resume-review';


    //Gets add section page
    public function getAddSection()
    {
        $extraCredentials = ExtraCredential::where('user_id', auth()->id())->get();
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

    public function getAccomplishments()
    {
        $previousSection = $this->getPreviousSection();
        return view('extra-credentials.accomplishments', compact('previousSection'));
    }

    public function storeAccomplishments(Request $request)
    {
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
        $previousSection = $this->getPreviousSection();
        return view('extra-credentials.additional-info', compact('previousSection'));
    }

    public function storeAdditionalInfo(Request $request)
    {
        return $this->redirectForward();
    }

    public function getCertifications()
    {
        $previousSection = $this->getPreviousSection();
        return view('extra-credentials.certifications', compact('previousSection'));
    }

    public function storeCertifications(Request $request)
    {
        return $this->redirectForward();
    }

    //Redirects after storing a section
    public function redirectForward()
    {
        $currentRoute = \Route::getFacadeRoot()->current()->uri();
        $section = Session::get('add-sections');

        if(array_search($currentRoute, $section) + 1 == count($section)) {
            $route = self::RESUME_REVIEW;
        } else {
            $route = $section[array_search($currentRoute, $section) + 1];
        }

        return redirect($route);
    }

    public function getPreviousSection()
    {
        return Session::get('add-sections')[array_search(Route::getFacadeRoot()->current()->uri(), Session::get('add-sections')) - 1];
    }

    public function showCustomSection($custom)
    {
        $previousSection = Session::get('add-sections')[array_search('custom-section/'.$custom, Session::get('add-sections')) - 1];
        $custom = ExtraCredential::where([
            ['user_id', auth()->id()],
            ['slug', $custom],
        ])->first();

        return view('extra-credentials.custom-section', compact('custom', 'previousSection'));
    }

    public function addCustomSection(Request $request)
    {
        $section = auth()->user()->extraCredentials()->create([
            'title' => $request->section,
            'slug' => \Str::slug($request->section),
            'extra' => self::NON_EXTRA
        ]);

        return response()->json(['id' => $section->id, 'title' =>  $section->title]);
    }

    public function destroyCustomSection(ExtraCredential $custom)
    {
        $custom->delete();
        return response()->json('Success');
    }

}
