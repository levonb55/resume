<?php

namespace App\Http\Middleware;

use Closure;

class CheckForChosenCover
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
        if(!(auth()->user()->coverLetter && auth()->user()->coverLetter->template_id)) {
            return redirect()->route('cover-letter');
        }

        return $next($request);
    }
}
