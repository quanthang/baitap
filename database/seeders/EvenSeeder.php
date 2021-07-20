<?php

namespace Database\Seeders;

use App\Models\Event;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();
        DB::table('events')->truncate();
        for ($i = 0; $i < 100;$i++){
            Event::create([
                'eventName' => $fake->name,
                'bandNames' => $fake->userName,
                'startDate' => $fake->date('Y-m-d'),
                'endDate' => $fake->date('Y-m-d'),
                'portfolio' => $fake->name,
                'ticketPrice' => random_int(10000,1000000),
                'status' => random_int(0,3)
            ]);
        }
    }
}
