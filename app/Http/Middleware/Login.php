<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        $username = $request->input('username');
        $password = $request->input('password');


        if ($username === 'admin' && $password === 'admin'){ 
        return $next($request);
    
        } else {
            return redirect('/login1')->withErrors(['error'=>'Invalid Credentials']);

      }
    }
}