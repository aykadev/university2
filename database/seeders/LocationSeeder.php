<?php

namespace Database\Seeders;


use App\Models\Location;
use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            ['name'=> 'Germany', 'universities'=> [
                'Technical University of MUnich',
                'Ludwig Maximilian University of Munich',
                'Heidelberg University',
                'Humbolt University of Berlin',
                'RWTH Aachen University'
            ]],
            ['name'=> 'United States of America', 'universities'=> [
                'Harvard University',
                'Massaachusetts Institude of Technology',
                'Stanford University',
                'California Institute of Technology',
                'University of California, Berkeley'
            ]],
            ['name'=> 'Hungary', 'universities'=> [
                'Eötýös Lorand University', 
                'Central European University', 
                'University of Szeged', 
                'University of Debrecen', 
                'Budapest University of Technology and Economics'
            ]],
            ['name'=> 'China', 'universities'=> [
                'Tsinghua University', 
                'Peking University', 
                'Fudan University', 
                'Zhejiang University', 
                'Shanghai Jiao Tong University'
            ]],
            ['name'=> 'Russia', 'universities'=> [
                'Lomonosov Moscow State University', 
                'Saint Petersburg State University', 
                'Novosibirsk State University', 
                'Tomsk State University', 
                'Moscow Institute of Physics and Technology'
            ]],
            ['name'=> 'Grear Britain', 'universities'=> [
                'University of Oxford', 
                'University of Cambridge', 
                'Imperial College London', 
                'London School of Economics and Political Science', 
                'University College London'
            ]],
            ['name'=> 'Canada', 'universities'=> [
                'University of Toronto', 
                'University of British Columbia', 
                'McGill University', 
                'University of Alberta', 
                'McMaster University'
            ]],
            ['name'=> 'Turkey', 'universities'=> [
                'Bilkent University', 
                'Middle East Technical University', 
                'Bogacizi University', 
                'Istanbul University', 
                'Ankara University'
            ]],
            ['name'=> 'Japan', 'universities'=> [
                'University of Tokyo', 
                'Kyoto University', 
                'Osaka University', 
                'Tokyo Institute of Technology', 
                'Tohoku University'
            ]],
            ['name'=> 'Turkmenistan', 'universities'=> [
                'Turkmen State University', 
                'Magtymguly Turkmen State University', 
                'Turkmen Agriculture University', 
                'Turkmen State Institute of Economics and Management', 
                'Turkmen National Conservatory'
            ]],
        ];

        foreach ($objs as $obj) {
            $location = Location::create([
                'name' => $obj['name'],
            ]);

            foreach ($obj['universities'] as $university) {
                University::create([
                    'location_id' => $location->id,
                    'name' => $university,
                ]);
            }
        }
    }
}
