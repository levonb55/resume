<?php

namespace App\Http\Middleware;

use Closure;

class RedirectToResumeReview
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if(auth()->user()->credential && auth()->user()->credential->resume_complete) {
            $response = redirect()->route('resume-review');
        }

        return $response;
    }
}
