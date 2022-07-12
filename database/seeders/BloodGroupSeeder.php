<?php

namespace Database\Seeders;

use App\Models\BloodGroup;
use Illuminate\Database\Seeder;

class BloodGroupSeeder extends Seeder
{
    private $bloodGroups = [
        '1' => 'A+',
        '2' => 'A-',
        '3' => 'B+',
        '4' => 'B-',
        '5' => 'O+',
        '6' => 'O-',
        '7' => 'AB+',
        '8' => 'AB-',
    ];

    public function run()
    {
        array_walk($this->bloodGroups, function ($bloodGroup, $key) {
            BloodGroup::create([
                'id' => $key,
                'bloodGroup' => $bloodGroup,
            ]);
        });
    }
}
