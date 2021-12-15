<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\User;
        $user->name = "Muhammad Rival";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make('1234');
        $user->role = "Admin";

        $user->save();
    }
}
