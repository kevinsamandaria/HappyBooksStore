<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            [
                'category_id'=>1,
                'title'=>'Dune'
            ],
            [
                'category_id'=>1,
                'title'=>'Frankenstein'
            ],
            [
                'category_id'=>1,
                'title'=>'The Lord Of The Rings'
            ],
            [
                'category_id'=>2,
                'title'=>'Marmut Merah Jambu'
            ],
            [
                'category_id'=>2,
                'title'=>'Si Putih'
            ],
            [
                'category_id'=>2,
                'title'=>'Laskar Pelangi'
            ],
            [
                'category_id'=>3,
                'title'=>'Dilan'
            ],
            [
                'category_id'=>3,
                'title'=>'Harry Potter And the Philosopher Stone'
            ],
            [
                'category_id'=>3,
                'title'=>'The Hunger Games'
            ],
            [
                'category_id'=>4,
                'title'=>'Master Laravel For Beginners: Get From Zero To Proficiency In The Laravel Framework: Laravel Book'
            ],
            [
                'category_id'=>4,
                'title'=>'Beginning Programming for Dummies'
            ],
            [
                'category_id'=>4,
                'title'=>'Learn Android Studio 3 with Kotlin: Efficient Android App Development'
            ],
            [
                'category_id'=>6,
                'title'=>'The Shining'
            ],
            [
                'category_id'=>6,
                'title'=>'The Christmast Bell'
            ]
        ]);
    }
}
