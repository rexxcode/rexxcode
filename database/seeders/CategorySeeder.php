<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name' => 'Programming',
        	'slug' => 'programming'
        ]);
        DB::table('categories')->insert([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle'
        ]); 
        DB::table('categories')->insert([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        DB::table('categories')->insert([
            'name' => 'Musik',
            'slug' => 'musik'
        ]);
    }
}
