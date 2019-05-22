<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert(
            array(
                [
                    'foreign_id' => 1,
                    'client_id' => 1,
                    'name' => 'Product 1',
                    'descr' => 'Product 1 description',
                    'price' => 1000,
                    'popular' => 1,
                    'category_id' => 1,
                    'last_update' => '2019-05-21',
                ],
                [
                    'foreign_id' => 2,
                    'client_id' => 2,
                    'name' => 'Product 2',
                    'descr' => 'Product 2 description',
                    'price' => 1500,
                    'popular' => 1,
                    'category_id' => 2,
                    'last_update' => '2019-05-22',
                ]
            )
        );
    }
}
