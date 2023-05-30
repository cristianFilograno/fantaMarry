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
            'Gabriella Zizzo',
            'Davide Cassano',
            'Paola Colella',
            'Orlando De Santis',
            'Stefania Mauro',
            'Rocco Dipaola',
            'Roberta Ferrandino',
            'Aldo Vidoni',
            'Annalisa Mauro ',
            'Serena Milella',
            'Giuseppe Laudicina',
            'Alessandro Moccia',
            'Valentina Ventrella',
            'Annamaria Tangorra',
            'Giancarlo Sabini',
            'Daniela Tangorra',
            'Angelo Marini',
            'Cristian Filograno',
            'Francesco Filograno',
            'Amira Boccia',
            'Tonia D\'Errico',
            'Fabio Ricci',
            'Michele Rossitto',
            'Barbora Rysava',
            'Giuseppe Ambriola',
            'Chiara Lavopa',
            'Danilo Lanera',
            'Veronica Tuveri',
            'Massimiliano Auciello',
            'Samira Qanouni',
            'Giuseppe Carra',
            'Elisabetta Corigliano',
            'Silvia Montrone',
            'Francesco Genio',
            'Enzo Brescia',
            'Domenico Piro',
            'Gaetano Di Palo',
            'Emilia Casanova',
            'Flavio Pagliara',
            'Giovanna Fioretti',
            'Isabella Maggi',
            'Francesca Brescia',
            'Marino Faliero',
            'Roberta Piperis',
            'Virginia Romita',
            'Ilaria Guarini',
            'Federica Giardino',
            'Javier Mora',
            'Lucrezia Zonno',
            'Riccardo Bellini',
            'Barbara Monetti',
            'Leo Maltese',
            'Stefani Altini',
            'Fabiana De Giglio',
            'Massimiliano Porcelli',
            'Francesca Deperte',
            'Francesco Sanzone',
            'Olga Pertoso',
            'Claudio Filipponi',
            'Annamaria Azzaretti',
            'Mariagrazia Massaro',
            'Francesca Ladisa',
            'Francesca Dattoma',
            'Chiara Zeffiri',
            'Eldi Gorce',
            'Martina Mammola',
            'Gianluca Maglia',
            'Giovanna Beatino',
            'Santino Lombardo',
            'Claudia Re',
            'Mario Devito',
            'Mattia Evangelista',
            'Camilla Cimini',
            'Eleonora Iaselli',
            'Gio Papagna',
            'Silvia Recchi',
            'Mariangel Acevedo',
            'Stefano Zaccaria',
            'Federica Giusto',
            'Angela Lopez',
            'Angela Zonno',
            'Claudia Carofiglio',
            'Giorgia Loconsole',
            'Ilaria Campana',
            'Luigi Rana',
            'Gianluca Benedetto',
            'Valeria Neviera',
            'Francesco Barnaba',
            'Francesco Giuliani',
            'Carolina Pupolizio',
            'Giuseppe Oliva',
            'Demi Calò',
            'Sabrina Ripa',
            'Sofia Capurso',
            'Alessandro Zonno',
            'Michele Saulle',


        ];

        $events = [
            ['Auguri anticipati', '-5', false],
            ['Fotografi non autorizzati', '-5', false],            
            ['Pianto', '-5', false],            
            ['Fotografia in compagnia', '20', false],
            ['Il/La palestrato/a', '-10', false],
            ['Vestito macchiato', '-15', false],            
            ['1° Evviva gli sposi', '10', false],
            ['Prima coppia a ballare', '10', false],            
            ['Capo trenino', '20', false],
            ['Invitato/a con l\'alone', '-10', false],  
            ['Rottura piatto e bicchiere', '-10', false],
            ['Pesta merda', '-10', false],
            ['Invitato/a scalza', '5', false],
            ['Invitato/a fa brindisi', '15', false],
            ['Vincitrice Bouquet', '50', false],
            ['Ritardatari in sala', '-30', false],
            ['Vincitore Giarrettiera', '50', false],
            ['Il denudato', '-70', false],
            ['Urla "bacio bacio"', '45', false],
            ['Stesso abito', '-20', false],
            ['Tacco vertiginoso', '15', false],
            ['Abito con dettagli rossi', '30', false],
            ['Diretta social', '-50', false],
            ['Cappello/Coppola', '15', false],
            ['Abito bianco (uomo)', '-30', false],
            ['Invitato/a che vomita', '-35', false],
            ['Invitato/a che porta gli avanzi a casa', '-80', false],
            ['Ubriacone/a', '-100', false],
            ['Dedica agli sposi', '15', false],
            ['Bello addormentato', '-25' , false],
            ['Prima Lettura', '10', true],
            ['Seconda Lettura', '10', true],
            ['Salmo', '10', true],
            ['Preghiera dei fedeli', '10', true],
            ['Sbaglio durante le letture', '-10', true],
        ];

        
        foreach ($events as $event){
            DB::table('events')->insert([
                "name" => $event[0],
                "scoreEvent" => $event[1],
                "admin" => $event[2],
                
            ]);
        }
        
        
        foreach ($players as $player){
            DB::table('players')->insert([
                "name" => $player,
            ]);
        }
    }
}
