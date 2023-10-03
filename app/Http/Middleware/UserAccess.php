<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Illuminate\Http\Response| Illuminate\Http\RedirectResponse    
     * 
     */
    public function handle(Request $request, Closure $next, $userRole): Response
    {
        if(auth()->user()->role == $userRole)
        {
            return $next($request);
        }
        return response()->json(['You dont have permission to access this page.']);
        /* return response()->view('errors.checkpermission');*/
    }
}
