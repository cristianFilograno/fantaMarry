<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{

    protected $listeners = ['refreshPosts' => '$refresh'];

    public function render()
    {
        $posts = Post::get();

        return view('livewire.show-posts', [
            'posts' => $posts,
        ]);
    }
}
