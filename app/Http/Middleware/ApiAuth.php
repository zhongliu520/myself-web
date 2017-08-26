<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $parameter)
    {
        if($parameter == "checked" && !\Auth::check())
        {dd(Auth::check());
            return response()->json(["status"=>500, "info"=>"error", "data"=>[]]);
        }
        return $next($request);
    }
}
