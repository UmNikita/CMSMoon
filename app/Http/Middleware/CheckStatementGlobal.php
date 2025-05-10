<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Config;

class CheckStatementGlobal
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $installed_value = Config::get('app.installed');
        if ($request->is('moon-installation') || $request->is('moon-installation/*')) {
            if($installed_value) {
                return redirect('/');
            }
            else {
                return $next($request);
            }
        }
        else {
            if(!$installed_value) {
                return redirect('/moon-installation');
            }
            else {
                return $next($request);
            }
        } 
    }
}
