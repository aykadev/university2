<?php

namespace Database\Seeders;


use App\Models\Location;
use App\Models\University;
use App\Models\Program;
use App\Models\ProgramRequirement;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $this->call([
            LocationSeeder::class,
            UniversitySeeder::class,
            ProgramSeeder::class,
            ProgramRequirementSeeder::class,
        ]);
    }
}
