<?php

namespace App\Http\Middleware;

use Closure;

class RedirectToCoverReview
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

        if(auth()->user()->coverLetter && auth()->user()->coverLetter->complete) {
            $response = redirect()->route('cover-letter.review');
        }

        return $response;
    }
}
