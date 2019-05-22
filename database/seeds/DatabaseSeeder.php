<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            Product_sizesTableSeeder::class,
            TagsTableSeeder::class,
            Product_tagTableSeeder::class,
            AdditiveTableSeeder::class,
            Additive_productTableSeeder::class,
        ]);
    }
}
