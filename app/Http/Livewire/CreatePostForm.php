<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Post;
use App\Models\Player;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreatePostForm extends Component
{

    // RIVEDI MEGLIO STORE, SE C'è QUALCOSA DI SUPERFLUO

    use WithFileUploads;

    public $fotoPost, $title, $body, $user_id, $selectedPlayer, $selectedEvent, $players = [], $events = [], $selectedEvents = [];
    

    // protected $rules =[];

    // protected $messages = [];

    public function store(){

        // Controllo se l'utente è autenticato
        if(Auth::user()){
    
            // Creo un nuovo post e lo salvo nel database, usando i valori passati dal form
            $post = Post::create([
                'fotoPost' => $this->fotoPost ? $this->fotoPost->store('public/coverPost') : null,
                'title' => $this->title,
                'body' => $this->body,
                'user_id' => Auth::user()->id
            ]);
    
            // Controllo se sono stati selezionati un giocatore e un evento
            if ($this->selectedPlayer && $this->selectedEvent) {
                
                // Ottengo l'istanza del giocatore selezionato
                $player = Player::find($this->selectedPlayer);
    
                // Ottengo l'istanza dell'evento selezionato
                $event = Event::find($this->selectedEvent);
    
                // Aggiungo l'evento al giocatore, associandolo alla sua relativa pivot table
                $player->events()->attach($event->id);

                // Aggiungi l'ID dell'evento selezionato all'array di eventi selezionati dal giocatore
                $this->selectedEvents[] = $this->selectedEvent;


                // Aggiorno lo score del player
                $player->score += $event->scoreEvent;
                $player->save();
            
                // Recupera i team contenenti il player
                $teams = $player->teams;

                // Aggiorna il punteggio di ogni team
                foreach ($teams as $team) {
                    $team->scoreTeam += $event->scoreEvent;
                    $team->save();
                }
            }
    
            // Emesso un evento per indicare che il post è stato creato con successo
            $this->emit('postCreated', $post->id);
    
            // Mostro un messaggio di successo all'utente
            session()->flash('postCreated', 'Hai pubblicato il post!');
    
        } else {
            // Mostro un messaggio di errore all'utente se non è autenticato
            session()->flash('accessDenied', 'Devi effettuare l\'accesso per inserire un post!');
        }
    
        // Azzero i campi del form
        $this->reset();
        $this->mount();
    }
    
       
    public function mount()
{
    $this->players = Player::all();
    $this->events = Event::all();
}

public function updatedSelectedPlayer($playerId)
{
    // Ottengo l'istanza del giocatore selezionato
    $player = Player::find($playerId);

    if ($player) {
        // Ottengo gli eventi già assegnati al giocatore
        $assignedEvents = $player->events;

        // Aggiorno la lista degli eventi selezionabili
        $this->events = Event::whereNotIn('id', $assignedEvents->pluck('id'))->get();
    } else {
        // Se non è stato selezionato alcun giocatore, mostro tutti gli eventi
        $this->events = Event::all();
    }

    // Resetto la selezione degli eventi
    $this->selectedEvents = [];
}
    

    
    public function render()
    {
        
        return view('livewire.create-post-form');
    }
}
