<?php

namespace Database\Seeders;

use App\Models\customerMenu;
use Illuminate\Database\Seeder;

class customerMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        customerMenu::factory()->count(rand(2,10))->create();
    }
}