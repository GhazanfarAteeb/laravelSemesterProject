<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email = 'ghazanfar.ateeb9125@gmail.com';
        $user->name = 'Ghazanfar Ateeb';
        $user->password = Hash::make('admin');
        $user->save();
    }
}