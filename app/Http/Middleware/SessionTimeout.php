<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionTimeout
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
        $timeout = 1800; // 30 menit

        $lastActivity = Session::get('lastActivityTime');
        $currentTime = time();

        if ($lastActivity && ($currentTime - $lastActivity) > $timeout) {
            Auth::logout();
            Session::flush();
            return redirect('/login')->withErrors(['message' => 'Your session has expired due to inactivity.']);
        }

        Session::put('lastActivityTime', $currentTime);

        return $next($request);
    }
}