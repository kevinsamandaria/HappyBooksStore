<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'category'=>'Science Fiction'
            ],
            [
                'category'=>'Novel'
            ],
            [
                'category'=>'Fiction'
            ],
            [
                'category'=>'Computer'
            ],
            [
                'category'=>'Comic'
            ],
            [
                'category'=>'Horror'
            ],
            [
                'category'=>'Improvement'
            ]
        ]);
    }
}
