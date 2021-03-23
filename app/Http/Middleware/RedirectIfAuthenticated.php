<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->roles; 
            switch ($role) {
                case 'admin':
                    return '/admin/dashboard';
                    break;
                case 'tutor':
                    return '/tutor/dashboard';
                    break;
                case 'student':
                    return '/student/dashboard';
                    break;
            
                default:
                    return '/login'; 
                break;
            }
        }

        return $next($request);
    }
}
