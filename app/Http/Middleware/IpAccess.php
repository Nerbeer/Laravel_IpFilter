<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use App\Setting;
use Closure;

class IpAccess
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
        if (!Setting::where('ip_address', $request->ip())->count())
        {
            return new Response(view('denied'));
        }
        return $next($request);
    }
}
