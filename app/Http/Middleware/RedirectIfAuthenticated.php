<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\If_;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            
            if ($role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($role === 'instructor') {
                return redirect()->route('instructor.dashboard');
            } else {
                return redirect()->route('student.dashboard');
            }
        }

        return $next($request);
    }
}
