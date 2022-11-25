<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();


        if ($user->status == 'admin') {
            return $next($request);
        }else{
            return response()->view('error', [
                "pagetitle"=>" Error BosQue"
            ]);

        }



    }
}
