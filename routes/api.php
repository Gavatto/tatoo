<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Маршрути API
|------------------------------------------------ ------------------------
|
| Тут ви можете зареєструвати маршрути API для своєї програми. Ці
| маршрути завантажуються RouteServiceProvider, і всі вони будуть
| бути призначеним до групи проміжного програмного забезпечення "api". Зробіть щось чудове!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
