<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Player;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){

        return view('welcome');
    }

    public function rules(){

        return view('regole');
    }

    public function showLeaderboard(){

        $teams = Team::take(7)->orderBy('scoreTeam', 'DESC')->get();

        return view('leaderboard', compact('teams'));
    }
    
    public function index()
    {
        $players = Player::all();

        return view('user.list', compact('players'));
    }
}
