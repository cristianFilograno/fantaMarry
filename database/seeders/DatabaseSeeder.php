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
        
        
        foreach ($players as $player){
            DB::table('players')->insert([
                "name" => $player,
            ]);
        }
    }
}
