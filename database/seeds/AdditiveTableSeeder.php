<?php

use App\Additive;
use Illuminate\Database\Seeder;

class AdditiveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Additive::insert(
            array(
                [
                    'name' => 'Additive 1',
                    'last_update' => '2019-05-21',
                ],
                [
                    'name' => 'Additive 2',
                    'last_update' => '2019-05-22',
                ],
                [
                    'name' => 'Additive 3',
                    'last_update' => '2019-05-21',
                ],
                [
                    'name' => 'Additive 4',
                    'last_update' => '2019-05-22',
                ]
            )
        );
    }
}
