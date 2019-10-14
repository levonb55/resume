<?php


namespace App\Http\ViewComposers;


use Illuminate\Contracts\View\View;

class ResumeTemplateComposer
{
    public function compose(View $view) {
//        $view->with('credential', auth()->user()->credential);
//        $view->with('experiences', auth()->user()->experiences);
        $view->with([
            'credential' => auth()->user()->credential,
            'experiences' => auth()->user()->experiences,
            'education' => auth()->user()->education,
            'extraCredentials' => auth()->user()->extraCredentials,
            'showDefault' =>  \Route::currentRouteName() !== "resume-review" ? true : false
        ]);

    }
}