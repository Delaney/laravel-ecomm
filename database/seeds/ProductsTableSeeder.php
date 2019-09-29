<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$price = 100000;
		
		Product::create([
			'brand_id'		=>	1,
			'sku'			=>	'001-001-0001',
			'name'          =>	'Sola Dress',
			'slug'			=>	'sola-dress',
			'quantity'		=>	1,
			'price'			=>	strval($price),
		]);
		$price += 100000;
		
        Product::create([
			'brand_id'		=>	1,
			'sku'			=>	'001-001-0002',
			'name'          =>	'Sayo Pants',
			'slug'			=>	'sayo-pants',
			'quantity'		=>	1,
			'price'			=>	strval($price),
		]);		
		$price += 100000;

		Product::create([
			'brand_id'		=>	1,
			'sku'			=>	'001-001-0003',
			'name'          =>	'Bola Dress',
			'slug'			=>	'bola-dress',
			'quantity'		=>	1,
			'price'			=>	strval($price),
		]);		
		$price += 100000;

		Product::create([
			'brand_id'		=>	1,
			'sku'			=>	'001-001-0004',
			'name'          =>	'Ola Dress',
			'slug'			=>	'ola-dress',
			'quantity'		=>	1,
			'price'			=>	strval($price),
		]);
    }
}
