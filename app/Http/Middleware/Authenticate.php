<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class Authenticate extends Middleware
{
    /**
     * Determine if the user is logged in to any of the given guards.
     *
     * @param Request $request
     * @param array $guards
     * @return void
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    #[NoReturn] protected function authenticate($request, array $guards)
    {
        $guard = current($guards);
        $request->attributes->add(['guard' => $guard]);
        if ($this->auth->guard($guard)->check()) {
            return $this->auth->shouldUse($guard);
        }
        $this->unauthenticated($request, $guards);
    }
}
