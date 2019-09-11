<?php

namespace App\Http\Middleware;

use Closure;

class Owner
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
        $parameters = request()->route()->parameters();
        $parameter = reset($parameters);

        if($parameter->user_id !== auth()->id() ) {
            return back();
        }

        return $next($request);
    }
}
