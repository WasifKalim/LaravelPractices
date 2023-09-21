<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use faker\factory as Faker;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach(range(1,200) as $key =>$value){
            DB::table('blogs')
            ->insert([
                'title' => $faker->text,
                'slug' => $faker->slug,
                'keywords' => $faker->text,
                'description' => $faker->text,
                'content' => $faker->paragraph,
            ]);
        }
        
    }
}
