<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShowTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('event_days')->insert([
            [
                'start_time' => Carbon::now(),
                'end_time' => Carbon::now()->addHours(1.5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'start_time' => Carbon::now()->addHours(1.5),
                'end_time' => Carbon::now()->addHours(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'start_time' => Carbon::now()->addHours(3),
                'end_time' => Carbon::now()->addHours(4.5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'start_time' => Carbon::now()->addHours(4.5),
                'end_time' => Carbon::now()->addHours(6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
