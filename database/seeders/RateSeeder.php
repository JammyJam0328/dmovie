<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Rate,Type};
class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = Type::create([
            'name' => 'Single',
            'description' => 'Single room',
        ]);
        Rate::create([
            'type_id' => $type->id,
            'hours'=>'6',
            'price' => '150',
            'description'=>'Single room rate for 6 hours',
        ]);
        Rate::create([
            'type_id' => $type->id,
            'hours'=>'12',
            'price' => '250',
            'description'=>'Single room rate for 12 hours',
        ]);
        Rate::create([
            'type_id' => $type->id,
            'hours'=>'24',
            'price' => '500',
            'description'=>'Single room rate for 24 hours',
        ]);
        $type = Type::create([
            'name' => 'Double',
            'description' => 'Double room',
        ]);
        Rate::create([
            'type_id' => $type->id,
            'hours'=>'6',
            'price' => '200',
            'description'=>'Double room rate for 6 hours',
        ]);
        Rate::create([
            'type_id' => $type->id,
            'hours'=>'12',
            'price' => '300',
            'description'=>'Double room rate for 12 hours',
        ]);
        Rate::create([
            'type_id' => $type->id,
            'hours'=>'24',
            'price' => '600',
            'description'=>'Double room rate for 24 hours',
        ]);
        $type = Type::create([
            'name' => 'Triple',
            'description' => 'Triple room',
        ]);
        Rate::create([
            'type_id' => $type->id,
            'hours'=>'6',
            'price' => '250',
            'description'=>'Triple room rate for 6 hours',
        ]);
        Rate::create([
            'type_id' => $type->id,
            'hours'=>'12',
            'price' => '350',
            'description'=>'Triple room rate for 12 hours',
        ]);
        Rate::create([
            'type_id' => $type->id,
            'hours'=>'24',
            'price' => '700',
            'description'=>'Triple room rate for 24 hours',
        ]);
    }
}