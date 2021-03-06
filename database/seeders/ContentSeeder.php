<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
        'judul' =>  'Save Your Money',
        'image' =>  'assets\images\blog-thumb-07.jpeg' 
        ]);

        DB::table('contents')->insert([
            'judul' =>  'Save World',
            'image' =>  'assets\images\blog-thumb-08.jpeg' 
        ]);
    }
}
