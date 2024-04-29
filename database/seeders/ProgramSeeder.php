<?php

namespace Database\Seeders;


use App\Models\Program;
use App\Models\ProgramRequirement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $objs = [
            'Medicine',
            'Law',
            'Business Administration',
            'Computer Science',
            'Public Health',
            'Engineering',
            'Economics',
        ];
        foreach ($objs as $obj) {
            $program = Program::create([
                'name' => $obj,
            ]);
        }
    }
}
