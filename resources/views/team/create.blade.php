<x-layout>
    @if (session('message'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif


    <div class="container py-5 px-5 shadow ">
    <h1 class="text-center textB mb-4 textP fw-bold text-uppercase ">Crea la tua rosa:</h1>

        <form action="{{ route('team.store') }}" method="POST">
            {{-- @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
          @endif --}}
            @csrf
            
            <div class="form-group">
                <label class="textF fw-bold lead " for="name">Nome del Team</label>
                <input type="text" name="name" id="name" class="form-control"   value="{{ old('name') }}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group Team">
                <label class="textF fw-bold lead " for="players">Seleziona i 5 giocatori </label>
                <small class="text-muted">(Da desktop usare "ctrl")</small>
                <select name="players[]" class="form-control selectTeam"  size="5" multiple >
                    @foreach($players as $player)
                    <option value="{{ $player->id }}">{{ $player->name }}</option>
                    @endforeach
                </select>
                @error('players')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class=" my-3 btn btn-primary fs-5">Crea Team</button>
            </div>
        </form>

    </div>
</x-layout>