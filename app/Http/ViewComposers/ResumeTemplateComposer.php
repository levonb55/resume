<?php


namespace App\Http\ViewComposers;


use Illuminate\Contracts\View\View;

class ResumeTemplateComposer
{
    public function compose(View $view) {
        $view->with('credential', auth()->user()->credential);
    }
}