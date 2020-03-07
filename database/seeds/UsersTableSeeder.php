<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Erikas',
                'email' => 'e.miliuskevic@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('J*A2LuMWw9KqneM-B6mPn2aA'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'Romas',
                'email' => 'hello@prodev.lt',
                'password' => \Illuminate\Support\Facades\Hash::make('QQpAyJ2eNETAU4ZY28@T4E4A'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        ];

        \App\User::insert($data);
    }
}
