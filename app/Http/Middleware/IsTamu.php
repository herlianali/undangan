<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Tamu;

class IsTamu
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
        $lastUrl = request()->segment(count(request()->segments()));
        $tamu =  Tamu::where('nama', $lastUrl)->count();
        if($tamu === 1){
            return $next($request);
        }else{
            return redirect(route('undangan'))->with('status', 'Tamu Tidak Terdaftar');
        }
    }
}
