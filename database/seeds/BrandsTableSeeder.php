<?php

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name'          =>  'Chechi Arinze',
            'slug'   =>  'chechi-arinze'
        ]);
    }
}
