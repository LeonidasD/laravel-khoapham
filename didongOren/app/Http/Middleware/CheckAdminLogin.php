<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckAdminLogin
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
        if(!Auth::check())
            return redirect()->route('getLogin')->with('error','Vui lòng đăng nhập!');
        return $next($request);
    }
}
