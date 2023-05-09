<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePostForm extends Component
{


    use WithFileUploads;

    public $fotoPost, $title, $body, $user_id;

    // protected $rules =[];

    // protected $messages = [];


    public function store(){

        if(Auth::user()){
            $post = Post::create([
                'fotoPost' => $this->fotoPost ? $this->fotoPost->store('public/coverPost') : null,
                'title' => $this->title,
                'body' => $this->body,
                'user_id' => Auth::user()->id
                
            ]);
            $this->emit('postCreated', $post->id);
            session()->flash('postCreated', 'Hai pubblicato il post!');

        } else {
            session()->flash('accessDenied', 'Devi effettuare l\'accesso per inserire un post!');
        }

       

        // azzera i campi
        $this->reset();
    }



    
    public function render()
    {
        
        return view('livewire.create-post-form');
    }
}
