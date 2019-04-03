<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        // if ($request->age <= 200) {
        //     return redirect('/');
        // }

        if ($request->age <= 18) {
            dd($request->age.' under 18 years.');
        } else {
            dd($request->age.' valid. Access granted.');
        }

        return $next($request);
    }
}
