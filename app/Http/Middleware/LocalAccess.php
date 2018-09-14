<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Log;
use Closure;
use App;

class LocalAccess
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
        /* 
            Не очень понял, что означает доступ с локалхоста
            это именно доступ с той же самой машины или из локальной сети или еще что
            поэтому в whiteList можно добавлять ip, которые будут пропущены
            по дефолту там только SERVER_ADDR
        */
            
        $whiteList = array($request->server('SERVER_ADDR'), "192.168.10.1");
        if (!in_array($request->server('REMOTE_ADDR'), $whiteList))
        {
            abort(404);
        }

        return $next($request);
    }
}
