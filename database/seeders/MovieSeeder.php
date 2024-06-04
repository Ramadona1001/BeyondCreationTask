<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'title' => 'The Avengers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Superman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Spiderman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
