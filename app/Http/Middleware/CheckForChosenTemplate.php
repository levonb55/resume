<?php

namespace App\Http\Middleware;

use Closure;

class CheckForChosenTemplate
{
    /**
     * Redirects to the specified path if template is not chosen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!(auth()->user()->credential && auth()->user()->credential->template_id)) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
