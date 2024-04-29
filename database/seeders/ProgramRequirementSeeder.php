<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\ProgramRequirement;
use Database\Seeders\ProgramSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Biology', 
            'Chemistry',
            'History', 
            'English',
            'Mathematics', 
            'Informatics',
            'Informatics', 
            'Mathematics',
            'English', 
            'Mathematics',
            'Physics', 
            'Advanced Mathematics',
            'Linear Mathematics',
            'Economics',
        ];
        foreach ($objs as $obj) {
            $programRequirement = ProgramRequirement::create([
                'name' => $obj,
                'program_id' => rand(1, 7)
            ]);
        }
    }
}

