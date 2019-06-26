<?php

namespace App\Http\Middleware;

use Closure;

class goods
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
        $time=date('H',time());
        // echo $time;
        if ($time>=9&&$time<=17) {
            return $next($request);
        }else{
            return redirect('goods_index');
        }

    }
}
