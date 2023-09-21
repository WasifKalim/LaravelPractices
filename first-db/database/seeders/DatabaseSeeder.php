<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // for inserting fake data to student through factory and seedig
        // student::factory()->count(10)->create();

        // another way of above
        // student::factory(5)->create();

        $this->call([
            StudentSeeder::class
        ]);

        // $this->call([
        //     StudentSeeder::class
        //     // UserSeeder::class
        // ]);
    }
}
