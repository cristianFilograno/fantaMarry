<x-layout>
        <div class="row">
            @foreach ($users as $user)
            <div class="col-12 col-md-4 shadow my-5 py-3 d-flex px-5">
                <div class="d-flex flex-column mx-5">
                    <h1>{{$user->name}}</h1>
                    <h3>{{$user->score}}</h3>
                </div>

                @if (Auth::user() && auth()->user()->is_admin === 1)
                    <form action="{{ route('user.score', $user) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="score">Punteggio</label>
                            <input class="form-control" type="number" name="score" value="{{ $user->score }}">
                            <button type="submit">Save</button>
                        </div>
                    </form>
                @endif
            </div>
        
            @endforeach

        </div>
    </div>
        <input type="number" class="form-control" name="score" id="score" value="{{ $user->score }}">
    
</x-layout>