<?php
/**
 * Created by PhpStorm.
 * User: MA
 * Date: 31/03/2020
 * Time: 14:24
 */

namespace App\Http\Middleware;

use Closure;

class AssignGuard{

    public function handle($request, Closure $next, $guard = null){
        if($guard != null)
            auth()->shouldUse($guard);
        return $next($request);
    }
}