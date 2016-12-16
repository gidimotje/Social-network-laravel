<?php

namespace App\Http\Middleware;

use ...

class Authenticate
{
	
	public function handle($request, Closure $next, $guard = null)
	{
		if (Auth::guard($guard)->guest()) {
			if($request->ajax()){
				return response('Unauthorised.', 401);
			} else {
				return redirect()->route('home');
			}
		}

		return $next($request);
	}
}