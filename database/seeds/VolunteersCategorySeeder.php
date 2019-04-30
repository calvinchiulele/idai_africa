<?php

use Illuminate\Database\Seeder;

class VolunteersCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\Volunteer::all();
        foreach ($users as $user)
        {
            \App\Models\VolunteersCategory::create([
                'volunteers_id' => $user->id,
                'category_id'   => rand(1, count(\App\Models\Category::all())),
            ]);
        }
    }
}
