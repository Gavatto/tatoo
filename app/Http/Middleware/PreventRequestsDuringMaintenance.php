<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * URI, які мають бути доступними, коли ввімкнено режим обслуговування.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
