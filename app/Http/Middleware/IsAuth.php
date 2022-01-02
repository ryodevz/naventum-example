<?php

namespace App\Http\Middleware;

use Naventum\Framework\Illuminate\Support\Facades\Auth;
use Naventum\Framework\Illuminate\Support\Middleware;

class IsAuth
{
    /**
     * Handle an incoming request.
     */
    public function handle($next, $closure)
    {
        if (!Auth::user()) {
            // return abort(404);
            return redirect('/auth/login');
        }

        return $next($closure);
    }
}
