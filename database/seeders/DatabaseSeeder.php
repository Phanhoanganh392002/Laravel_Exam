<?php

namespace Database\Seeders;

use App\Models\Authors;
use App\Models\Books;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Authors::factory(10)->create();
        Books::factory(10)->create();
    }
}
