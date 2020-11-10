<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Ruben Jasahel Sandoval Perez";
        $user->email = "geneticspartan01@gmail.com";
        $user->password = Hash::make("secret");
        $user->save();
    }
}
