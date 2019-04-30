<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Category::create(['name' => 'Transporte']);
        App\Models\Category::create(['name' => 'Mão de Obra']);
    }
}
