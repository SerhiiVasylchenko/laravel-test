<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::insert(
            array(
                [
                    'name' => 'Tag 1',
                    'last_update' => '2019-05-21',
                ],
                [
                    'name' => 'Tag 2',
                    'last_update' => '2019-05-22',
                ],
                [
                    'name' => 'Tag 3',
                    'last_update' => '2019-05-21',
                ],
                [
                    'name' => 'Tag 4',
                    'last_update' => '2019-05-22',
                ]
            )
        );
    }
}
