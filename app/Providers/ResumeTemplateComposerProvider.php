<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ResumeTemplateComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->composeResumeTemplate();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function composeResumeTemplate() {
        view()->composer(
            'components.resumes.*',
            'App\Http\ViewComposers\ResumeTemplateComposer'
        );
        view()->composer(
            'resumes.*',
            'App\Http\ViewComposers\ResumeTemplateComposer'
        );
        view()->composer(
            'downloads.resume',
            'App\Http\ViewComposers\ResumeTemplateComposer'
        );
    }
}
