<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(
            [
                [
                    'name' => 'Turkish'
                ],
                [
                    'name' => 'Egyptian'
                ],
                [
                    'name' => 'Canadian'
                ],
                [
                    'name' => 'Italian'
                ]
            ]
        );
    }
}
