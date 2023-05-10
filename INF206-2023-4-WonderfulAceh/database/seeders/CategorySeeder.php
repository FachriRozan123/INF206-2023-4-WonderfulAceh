<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            'category' => 'Hutan',
            'slug' => 'hutan',
            'image' => 'img/hutan.jpg',
        ]);
        DB::table('category')->insert([
            'category' => 'Laut',
            'slug' => 'laut',
            'image' => 'img/laut.jpg',
        ]);
        DB::table('category')->insert([
            'category' => 'Gunung',
            'slug' => 'gunung',
            'image' => 'img/gunung.jpg',
        ]);
        DB::table('category')->insert([
            'category' => 'Sungai',
            'slug' => 'sungai',
            'image' => 'img/sungai.jpg',
        ]);
        DB::table('category')->insert([
            'category' => 'Tempat Bersejarah',
            'slug' => 'tempat_bersejarah',
            'image' => 'img/tempatsejarah.jpeg',
        ]);
        DB::table('category')->insert([
            'category' => 'Museum',
            'slug' => 'museum',
            'image' => 'img/museumaceh.jpeg',
        ]);
        DB::table('category')->insert([
            'category' => 'Pameran',
            'slug' => 'pameran',
            'image' => 'img/pameran.JPG',
        ]);
    }
}
