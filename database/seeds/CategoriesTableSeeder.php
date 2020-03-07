<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Energetika'],
            ['name' => 'Finansai'],
            ['name' => 'Gamyba'],
            ['name' => 'IT'],
            ['name' => 'Kompiuterija'],
            ['name' => 'Laisvalaikis ir pramogos'],
            ['name' => 'Medicina'],
            ['name' => 'Nekilnojamas turtas'],
            ['name' => 'Paslaugos'],
            ['name' => 'Pramonė'],
            ['name' => 'Prekyba'],
            ['name' => 'Reklama'],
            ['name' => 'Sportas'],
            ['name' => 'Transportas'],
            ['name' => 'Web sprendimai'],
            ['name' => 'Žemės ūkis'],
        ];

        \App\Category::insert($data);
    }
}
