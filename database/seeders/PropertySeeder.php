<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        $users = User::pluck('id')->toArray();
        $locations = Location::pluck('id')->toArray();

        Property::factory(50)->make()->each(function ($property) use ($users, $locations) {
            $property->user_id = $users[array_rand($users)];
            $property->location_id = $locations[array_rand($locations)];
            $property->save();
        });
    }
}
