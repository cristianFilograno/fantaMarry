<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function homepage(){

        return view('welcome');
    }

    public function rules(){

        return view('regole');
    }

    public function showLeaderboard(){

        $teams = Team::take(100)->orderBy('scoreTeam', 'DESC')->get();

        return view('leaderboard', compact('teams'));
    }
    
    public function index()
    {
        $players = Player::select('players.*', DB::raw('COUNT(events.id) as events_count'))
        ->leftJoin('event_player', 'players.id', '=', 'event_player.player_id')
        ->leftJoin('events', 'event_player.event_id', '=', 'events.id')
        ->groupBy('players.id')
        ->orderBy('events_count', 'desc')
        ->get();
        
        return view('user.list', compact('players'));
    }
}
