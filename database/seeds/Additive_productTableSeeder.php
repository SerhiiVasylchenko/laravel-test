<?php

use Illuminate\Database\Seeder;

class Additive_productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('additive_product')->insert(
            array(
                [
                    'additive_id' => 1,
                    'product_id' => 1
                ],
                [
                    'additive_id' => 2,
                    'product_id' => 2
                ],
                [
                    'additive_id' => 3,
                    'product_id' => 1
                ],
                [
                    'additive_id' => 4,
                    'product_id' => 1
                ],
            )
        );
    }
}
