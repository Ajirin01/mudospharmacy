<?php

namespace App\Http\Middleware;

use Closure;

class ConfirmPrescription
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
        if($request->has('prescription')){
            if($request->prescription == 'confirmed'){
                return $next($request);
            }else{
                return redirect('/');
            }
        }else{
            return $next($request);
        }
        
    }
}
