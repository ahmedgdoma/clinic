<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientCompletedProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role != 'patient'){
            return abort(403);
        }
        if(is_null(Auth::user()->email)){
            return redirect('completeProfile');
        }
        return $next($request);
    }
}
