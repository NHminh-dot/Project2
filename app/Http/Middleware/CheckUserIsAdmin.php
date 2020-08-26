<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckUserIsAdmin
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
        if(Session::has('user_id')){
            if (Session::get('role_id') == 1) {
                return $next($request);
            }
            else {
                return redirect()->route('view_login')->with('error','Do not have permission');    
            }
        }
        else{
            return redirect()->route('view_login')->with('error','Mày chưa đăng nhập');
        }
    }

}
