<?php

namespace App\Http\Middleware;

use Closure;

class Agent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
	 */
	function handle($request, Closure $next)
	{
		if (Auth::check() && Auth::user()->role == 'agent') {
			return $next($request);
		}
		elseif (Auth::check() && Auth::user()->role == 'customer') {
			return redirect('/customer');
		}
		else {
			return redirect('/admin');
		}
	}
}
