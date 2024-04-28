<?php

namespace Database\Seeders;


use App\Models\Program;
use App\Models\ProgramRequirement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            ['name'=>'Medicine', 'programRequirements'=> ['Biology', 'Chemistry']],
            ['name'=>'Law', 'programRequirements'=> ['History', 'English']],
            ['name'=>'Business Administration', 'programRequirements'=> ['Mathematics', 'Informatics']],
            ['name'=>'Computer Science', 'programRequirements'=> ['Informatics', 'Mathematics']],
            ['name'=>'Public Health', 'programRequirements'=> ['English', 'Mathematics']],
            ['name'=>'Engineering', 'programRequirements'=> ['Physics', 'Mathematics']],
            ['name'=>'Economics', 'programRequirements'=> ['Mathematics', 'Economics']],
        ];

        foreach ($objs as $obj) {
            $program = Program::create([
                'name' => $obj['name'],
            ]);

            foreach ($obj['programRequirements'] as $programRequirement) {
                ProgramRequirement::create([
                    'name' => $programRequirement,
                    'program_id' => $program->id,
                ]);
            }
        }
    }
}
