<?php

use Illuminate\Database\Seeder;

class VolunteersAssetsSeeder extends Seeder
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
            \App\Models\VolunteersAsset::create([
                'volunteers_id' => $user->id,
                'assets_id'    => rand(1, count(\App\Models\Asset::all())),
            ]);
        }
    }
}
