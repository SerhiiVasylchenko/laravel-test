<?php

use Illuminate\Database\Seeder;

class Product_tagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_tag')->insert(
        array(
            [
                'tag_id' => 1,
                'product_id' => 1
            ],
            [
                'tag_id' => 2,
                'product_id' => 2
            ],
            [
                'tag_id' => 3,
                'product_id' => 1
            ],
            [
                'tag_id' => 4,
                'product_id' => 1
            ],
        )
    );
    }
}
