<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Technical University of MUnich',
            'Ludwig Maximilian University of Munich',
            'Heidelberg University',
            'Humbolt University of Berlin',
            'RWTH Aachen University',
            'Harvard University',
            'Massaachusetts Institude of Technology',
            'Stanford University',
            'California Institute of Technology',
            'University of California, Berkeley',
            'Eötýös Lorand University', 
            'Central European University', 
            'University of Szeged', 
            'University of Debrecen', 
            'Budapest University of Technology and Economics',
            'Tsinghua University', 
            'Peking University', 
            'Fudan University', 
            'Zhejiang University', 
            'Shanghai Jiao Tong University',
            'Lomonosov Moscow State University', 
            'Saint Petersburg State University', 
            'Novosibirsk State University', 
            'Tomsk State University', 
            'Moscow Institute of Physics and Technology',
            'University of Oxford', 
            'University of Cambridge', 
            'Imperial College London', 
            'London School of Economics and Political Science', 
            'University College London',
            'University of Toronto', 
            'University of British Columbia', 
            'McGill University', 
            'University of Alberta', 
            'McMaster University',
            'Bilkent University', 
            'Middle East Technical University', 
            'Bogacizi University', 
            'Istanbul University', 
            'Ankara University',
            'University of Tokyo', 
            'Kyoto University', 
            'Osaka University', 
            'Tokyo Institute of Technology', 
            'Tohoku University',
            'Turkmen State University', 
            'Magtymguly Turkmen State University', 
            'Turkmen Agriculture University', 
            'Turkmen State Institute of Economics and Management', 
            'Turkmen National Conservatory',
        ];

        foreach ($objs as $obj) {
            $university = University::create([
                'name' => $obj,
                'location_id' => rand(1, 10),
                'program_id' => rand(1, 7),
                'program_requirement_id' => rand(1, 14),
                'comment' => fake()->paragraph(rand(2,10)),
            ]);
        }
    }
}
