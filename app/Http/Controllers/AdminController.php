<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function changeScore(Player $player, Request $request){
        // $validated = $request->validate([
        //     'profilePicture' => 'required|image|max:1024',
        // ]);
    
        $player->score = $request->score;
        $player->save();

        // Aggiorna il punteggio di ogni team in cui è presente il player
    foreach ($player->teams as $team) {

        $team->scoreTeam = $team->players()->sum('score');
        $team->save();
    }

        return redirect()->back()->with('scoreUpdated', 'Complimenti hai aggiornato il tuo score');
    }
}
