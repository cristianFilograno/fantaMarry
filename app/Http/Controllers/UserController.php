<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AvatarRequest;

class UserController extends Controller
{
    public function showProfile($userId){
        
        $user = User::findOrFail($userId);

        return view('user.index', compact('user'));
    }

    // public function index()
    // {
    //     $players = User::all();

    //     return view('player.index', compact('players'));
    // }

    public function changeAvatar(User $user, AvatarRequest $request){
        // $validated = $request->validate([
        //     'profilePicture' => 'required|image|max:1024',
        // ]);
    
        $user->update([
            'avatar' => $request->file('avatar')->store('public/avatar')
        ]);
        return redirect()->back()->with('avatarUpdated', 'Complimenti hai aggiornato il tuo avatar');
    }
}
