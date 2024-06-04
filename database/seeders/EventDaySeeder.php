<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('event_days')->insert([
            [
                'event_date' => Carbon::today(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'event_date' => Carbon::today()->addDays(1),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'event_date' => Carbon::today()->addDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'event_date' => Carbon::today()->addDays(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
