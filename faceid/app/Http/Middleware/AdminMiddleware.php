<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if($request->session()->has('user')) {
            if ($request->session()->get('user')['isAdmin'] == true){
                return $next($request);
            }
        }
        else {
            return redirect('/');
        }
    }
}
