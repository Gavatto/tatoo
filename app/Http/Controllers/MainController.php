<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function page(): View
    {
        // Отрмуємо всі записи masters з бази
        $masters = Master::all();

        // Відображаємо сторінку index.blade.php
        // Передаємо на сторінку список майстрів
        return view('index')->with([
            'masters' => $masters
        ]);
    }
}
