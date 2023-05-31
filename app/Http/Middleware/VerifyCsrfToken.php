<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * URI, які слід виключити з перевірки CSRF.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
