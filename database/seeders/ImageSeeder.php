<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'owner_id' => 1,
                'filename' => 'sumpule1.jpg',
                'title' => 'null' 
            ],

            [
                'owner_id' => 2,
                'filename' => 'sampule2.jpg',
                'title' => 'null' 
            ],

            [
                'owner_id' => 3,
                'filename' => 'sampule3.jpg',
                'title' => 'null' 
            ],

            [
                'owner_id' => 4,
                'filename' => 'sampule4.jpg',
                'title' => 'null' 
            ],

            [
                'owner_id' => 5,
                'filename' => 'sampule5.jpg',
                'title' => 'null' 
            ],

            [
                'owner_id' => 6,
                'filename' => 'sampule6.jpg',
                'title' => 'null' 
            ]]);
    }
}
