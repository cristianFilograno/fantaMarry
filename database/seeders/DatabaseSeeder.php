<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $players = [
            'Marco',
            'Alice',
            'Claudio',
            'Carlo',
            'Rebecca',
            'Giorgio',
            'Aldo',
            'Giovanni',
            'Giacomo',
            'Toti',
            'Tata',
            'Mimmo',
            'Silvia',
            'Gesualda',
            'Geronimo',

        ];

        $events = [
            ['Auguri anticipati', '-5'],
            ['Fotografi non autorizzati', '-5'],            
            ['Pianto', '-5'],            
            ['Fotografia in compagnia', '20'],
            ['Il/La palestrato/a', '-10'],
            ['Vestito macchiato', '-15'],            
            ['1° Evviva gli sposi', '10'],
            ['Prima coppia a ballare', '10'],            
            ['Capo trenino', '20'],
            ['Invitato/a con l\'alone', '-10'],  
            ['Rottura piatto e bicchiere', '-10'],
            ['Pesta merda', '-10'],
            ['Invitato/a scalza', '5'],
            ['Invitato/a fa brindisi', '15'],
            ['Vincitrice Bouquet', '50'],
            ['Ritardatari in sala', '-30'],
            ['Vincitore Giarrettiera', '50'],
            ['Il denudato', '-70'],
            ['Urla "bacio bacio"', '45'],
            ['Stesso abito', '-20'],
            ['Tacco vertiginoso', '15'],
            ['Abito con dettagli rossi', '30'],
            ['Diretta social', '-50'],
            ['Cappello/Coppola', '15'],
            ['Abito bianco (uomo)', '-30'],
            ['Invitato/a che vomita', '-35'],
            ['Invitato/a che porta gli avanzi a casa', '-80'],
            ['Ubriacone/a', '-100'],
            ['Dedica agli sposi', '15'],
            ['Bello addormentato', '-25'],


        ];

        
        foreach ($events as $event){
            DB::table('events')->insert([
                "name" => $event[0],
                "scoreEvent" => $event[1],
            ]);
        }
        
        
        foreach ($players as $player){
            DB::table('players')->insert([
                "name" => $player,
            ]);
        }
    }
}
