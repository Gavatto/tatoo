<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Master;
use App\Models\Tattoo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Початок бази даних програми.
     */
    public function run(): void
    {
        // Заповнюємо базу даними майстрів
        Master::insert([
            ['name' => 'Coffee Frog', 'description' => 'Have you ever heard the saying about the frog in the well? So, this frog is you', 'image' => 'img/master_1.jpg'],
            ['name' => 'Boss Frog', 'description' => 'The Samufrog has no goal, only the path', 'image' => 'img/master_2.jpg'],
            ['name' => 'Smoke Frog', 'description' => 'It doesn\'t matter what kind of work, the main thing is that they pay', 'image' => 'img/master_3.jpg'],
        ]);

        // Заповнюємо базу даними тату
        Tattoo::insert([
            ['name' => 'Reaper', 'image' => 'img/tattoo_1.jpg'],
            ['name' => 'The smile of justice', 'image' => 'img/tattoo_2.jpg'],
            ['name' => 'Dragon sword', 'image' => 'img/tattoo_3.jpg'],
            ['name' => 'Rat executioner', 'image' => 'img/tattoo_4.jpg'],
            ['name' => 'Eye of the moon', 'image' => 'img/tattoo_5.jpg'],
            ['name' => 'Warlock', 'image' => 'img/tattoo_6.jpg'],
            ['name' => 'Multicharger', 'image' => 'img/tattoo_7.jpg'],
            ['name' => 'Black solotse', 'image' => 'img/tattoo_8.jpg'],
        ]);
    }
}
