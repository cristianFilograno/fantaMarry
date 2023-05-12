<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AvatarRequest;

class UserController extends Controller
{
    public function showProfile($userId){
        
        $user = User::findOrFail($userId);
        // $userTeam = $user->team;
        $team = $user->team;

        return view('user.index', compact('user', 'team'));
    }


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
