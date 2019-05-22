<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert(
            array(
                [
                    'name' => 'Category 1',
                    'last_update' => '2019-05-21',
                ],
                [
                    'name' => 'Category 2',
                    'last_update' => '2019-05-22',
                ]
            )
        );
    }
}
