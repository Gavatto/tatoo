<?php

namespace App\Http\Controllers;

use App\Models\Tattoo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArtController extends Controller
{
    public function page(): View
    {
        // Отрмуємо всі записи tattoos з бази
        $tattoos = Tattoo::all();

        // Відображаємо сторінку art.blade.php
        // Передаємо на сторінку список тату
        return view('art')->with([
            'tattoos' => $tattoos
        ]);
    }
}
