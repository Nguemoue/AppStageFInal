<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class FirstlyAuthorizeToAll 
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     */

    function handle(Request $request,$next){
        if($request->session()->get("_pass") == null and !$request->routeIs("first.login") and !$request->routeIs("post.first.login") ){
            return redirect()->route("first.login");
        } 
        if($request->session()->get("_pass")!=null and $request->routeIs("first.login")){
            return redirect()->back();
        }    
        return $next($request);
    }
}
