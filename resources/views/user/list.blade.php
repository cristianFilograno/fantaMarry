<x-layout>
        <div class="row">
            @foreach ($players as $player)
            
            <div class="col-12 col-md-4 shadow my-5 py-3 d-flex px-5">
                <div class="d-flex flex-column mx-5">
                    <h1 class="textB fw-bold">{{$player->name}}: <span class="textA"> {{$player->score}}</span></h1>
                    <h3 class="textB">Eventi:</h3>
                    @foreach ($player->events as $event)
                    <p class="lead">-{{$event->name}}</p>
                        
                    @endforeach
                </div>

                @if (Auth::user() && auth()->user()->is_admin === 1)
                    <form action="{{ route('user.score', $player) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="score">Punteggio</label>
                            <input class="form-control" type="number" name="score" value="{{ $player->score }}">
                            <button type="submit">Save</button>
                        </div>
                    </form>
                @endif
            </div>
        
            @endforeach

        </div>
    </div>
    
</x-layout>