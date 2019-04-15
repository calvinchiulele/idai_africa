<?php

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
         factory(\App\Models\Province::class, 11)->create();
         factory(\App\Models\District::class, 145)->create();
         factory(\App\Models\User::class, 150)->create();
         factory(\App\Models\Volunteer::class, 90)->create();
         factory(\App\Models\Organization::class, 30)->create();
    }
}
