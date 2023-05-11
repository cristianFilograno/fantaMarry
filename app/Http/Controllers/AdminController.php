<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function changeScore(User $user, Request $request){
        // $validated = $request->validate([
        //     'profilePicture' => 'required|image|max:1024',
        // ]);
    
        $user->score = $request->score;
        $user->save();

        return redirect()->back()->with('scoreUpdated', 'Complimenti hai aggiornato il tuo score');
    }
}
