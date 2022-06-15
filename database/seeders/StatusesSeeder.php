<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Status;
class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name' => 'Unavailable',
            'description' => 'Room is not available',
        ]);
        Status::create([
            'name' => 'Available',
            'description' => 'Room is available',
        ]);
        Status::create([
            'name' => 'Occupied',
            'description' => 'Room is occupied',
        ]);
        Status::create([
            'name' => 'Uncleaned',
            'description' => 'Room is uncleaned',
        ]);

        Room::create([
            'type_id' => 1,
            'number' =>  1,
            'floor' => 1,
            'status_id' => 2,
        ]);
        Room::create([
            'type_id' => 1,
            'number' =>  2,
            'floor' => 2,
            'status_id' => 2,
        ]);
    }
}