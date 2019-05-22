<?php

use App\ProductSize;
use Illuminate\Database\Seeder;

class Product_sizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSize::insert(
            array(
                [
                    'product_id' => 1,
                    'name' => 'Big',
                    'price' => 800,
                    'last_update' => '2019-05-21',
                ],
                [
                    'product_id' => 2,
                    'name' => 'Small',
                    'price' => 1200,
                    'last_update' => '2019-05-22',
                ]
            )
        );
    }
}
