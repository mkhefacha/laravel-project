<?php

namespace App\Http\Middleware;
use Illuminate\Auth;
use App\User;
use Closure;

class confirmed
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
        if (auth()->check() && auth()->user()->verified()){

            return $next($request);
        }

            else
            {
                abort(403, 'merci de verifier voter compte .');
            }

    }
}
