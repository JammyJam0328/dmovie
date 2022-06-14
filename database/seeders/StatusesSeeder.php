<?php

namespace Database\Seeders;

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
    }
}