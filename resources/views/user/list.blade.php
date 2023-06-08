<x-layout>
    @if (Auth::user() && auth()->user()->is_admin === 1)
    <div class="text-center">
        <button class="m-3 btn btn-danger" id="bottoneNascondi">Nascondi tutti gli eventi</button>
    </div>
    @endif

        <div class="row w-100 mx-0">
            @foreach ($players as $player)
            
            
            <div class="col-12 col-md-4 px-0 shadow my-5 py-3 d-flex text-center">
                <div class="d-flex flex-column mx-auto">
                    <h1 class="textB fw-bold ">{{$player->name}}: <span class="textA"> {{$player->score}}</span></h1>
                    <div class="scomparsa">
                        <h3 class="textB">Eventi:</h3>
                        @foreach ($player->events as $event)
                        <p class="lead">-{{$event->name}}</p>
                            
                        @endforeach

                    </div>
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