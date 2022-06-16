<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodGroupSeeder extends Seeder
{

    private $bloodGroups = [
        "1" => "A+",
        "2" => "A-",
        "3" => "B+",
        "4" => "B-",
        "5" => "O+",
        "6" => "O-",
        "7" => "AB+",
        "8" => "AB-",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->bloodGroups as $key=>$bloodGroup){
            DB::table('blood_groups')->insert([
                'id' => $key,
                'bloodGroup' => $bloodGroup,
            ]);
        }
    }
}
