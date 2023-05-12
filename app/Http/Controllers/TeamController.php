<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $players = Player::all()->sortBy('name');
        return view('team.create', compact('players'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
        // Retrieve the validated input data...
        // $validated = $request->validated();


        // Verifica se l'utente ha già creato un team
        $user = Auth::user();
        if ($user->team) {
            return redirect()->back()->with(['message' => 'Hai già creato un team.']);
        }

        // $validatedData = $request;
    
        // Creazione del nuovo team
        $team = new Team();
        $team->name = $request->name;
        $team->user_id = $user->id;
        $team->save();
    
        // Aggiunta dei giocatori al team
        foreach ($request->players as $playerId) {
            $player = Player::find($playerId);
            if ($player) {
                $team->players()->attach($player);
                $team->scoreTeam += $player->score;
            }
        }

        // Aggiornamento del punteggio del team
        $team->update(['scoreTeam' => $team->scoreTeam]);
        

        // Redirect alla pagina del team
        return redirect()->route('user.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
