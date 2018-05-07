<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Config;

class SwitchDatabase
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
        $url = $request->getHost();
        $urls = config('switchdb');

        if ( array_has($urls, $url) ) {
        	$dbinfo = config('switchdb')[$url];
            Config::set('database.connections.mysql.host', $dbinfo['host']);
            Config::set('database.connections.mysql.database', $dbinfo['database']);
            Config::set('database.connections.mysql.username', $dbinfo['username']);
            Config::set('database.connections.mysql.password', $dbinfo['password']);
        }
        
        return $next($request);
    }
}