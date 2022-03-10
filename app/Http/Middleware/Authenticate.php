<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use function in_array;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        if ( in_array('customer', $guards) ) {
            if ( !Auth::guard('customer')->check() ) {
                return route('get.login');
            }
        }

        return parent::handle($request, $next, ...$guards);
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
