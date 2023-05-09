<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        $users = User::take(10)->orderBy('score', 'DESC')->get();

        return view('leaderboard', compact('users'));
    }
}
