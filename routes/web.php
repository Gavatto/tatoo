<?php

use App\Http\Controllers\ArtController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Веб-маршрути
|------------------------------------------------ ------------------------
|
| Тут ви можете зареєструвати веб-маршрути для своєї програми. Ці
| маршрути завантажуються RouteServiceProvider, і всі вони будуть
| бути призначеним до групи проміжного програмного забезпечення "web". Зробіть щось чудове!
|
*/

// При відвідування певного URI викликається метод з контроллера
Route::get('/', [MainController::class, 'page']);
Route::get('/arts', [ArtController::class, 'page']);
