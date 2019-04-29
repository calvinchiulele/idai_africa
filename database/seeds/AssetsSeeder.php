<?php

use Illuminate\Database\Seeder;

class AssetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Asset::create(['name' => 'Pá']);
        App\Models\Asset::create(['name' => 'Enchada']);
        App\Models\Asset::create(['name' => 'Carro']);
        App\Models\Asset::create(['name' => 'Ancinho']);
        App\Models\Asset::create(['name' => 'Balse']);

    }
}
