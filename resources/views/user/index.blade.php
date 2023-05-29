<x-layout>

    <div class="container my-5 bgA myBorder">
        <div class="row shadow bg-light border my-5 w-100 mx-0">
            <div class="col-12 col-md-4">
                <div class="container my-4">
                    <img src="{{ Storage::url($user->avatar) }}" alt="Avatar" class="" style="width:100%">
                  </div>
            </div>
            <div class="col-12 col-md-8 px-0 text-center text-md-start">
                <h1 class="fw-bold textB textF my-3 text-uppercase">Profilo di {{ $user->name }}</h1>
                <p class="lead"> Email: {{ $user->email }}</p>
                @if($user->team)
                <p class="lead"> Punteggio attuale: {{ $user->team->scoreTeam }}</p>
                @else
                <p class="lead"> Punteggio attuale: N/A</p>

                @endif
                <p class="lead"> Data di registrazione: {{ $user->created_at }}</p>
                @if (Auth::user() && Auth::user()->id == $user->id)
                <form action="{{ route('user.avatar', ['user' => Auth::user()]) }}" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  {{-- ERRORI FORM --}}
                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
                  
                  <input  type="file" name="avatar" class="my-2">
                  <button type="submit" class="btn btn-danger px-2" data-mdb-ripple-color="dark"
                  style="z-index: 1;">
                  AGGIORNA
                  </button>
                  
                </form>
                @endif
            </div>
            <div class="container text-center shadow my-3">
                <p class="textB textF my-3 text-uppercase">Il mio team:</p>
                @if ($team)
                    <h3 class=" fw-bold textB textF my-3 text-uppercase">{{ $team->name }}</h3>
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <p class="display-6 fw-bold textB"> GIOCATORI:</p>

                                @foreach ($team->players as $player)
                                    <p>{{ $player->name }}</p>
                                @endforeach
                            
                        </div>
                        <div class="col-6 col-md-3">
                            <p class="display-6 fw-bold textB">PUNTEGGI:</p>

                                @foreach ($team->players as $player)
                                    <p>{{ $player->score }}</p>
                                @endforeach
                            
                        </div>
                        <div  class="col-12 col-md-4">
                            <p class="display-6 fw-bold textB">PUNTEGGIO TEAM:</p>
                            <p>{{ $team->scoreTeam }}</p>
                        </div>
                    </div>
                @else
                <p>Non hai ancora creato un team</p>
                @endif
            </div>
        </div>
    </div>
  </x-layout>
