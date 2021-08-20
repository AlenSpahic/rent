<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;


class AdminMiddleware
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

        $roleSingle = Role::where('name', 'admin')->first();

        if (Auth::user()->role_id == $roleSingle->id) {
             return $next($request);
        } else {
            return redirect('home');
        }
       
    }
}
