<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateMiddleware
{
   public function handle(Request $req, Closure  $next){
    if(!Auth::check()){
        return redirect()->route('login');
    }
    return $next($req);
   }
}
