<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * Назви файлів cookie, які не слід шифрувати.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
