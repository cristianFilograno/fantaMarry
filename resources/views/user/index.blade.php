<x-layout>

    {{-- @dd($user->avatar)     --}}
    <div class="container bg-warning">
        <div class="row shadow border my-5">
            <div class="col-12 col-md-4">
                <div class="container my-4">
                    <img src="{{ Storage::url($user->avatar) }}" alt="Avatar" class="image" style="width:100%">
                    <div class="middle">
                      <a class="text" href="">CAMBIA</a>
                      
                    </div>
                  </div>
            </div>
            <div class="col-12 col-md-8">
                <h1 class="fw-bold textP my-3 text-center">Profilo di {{ $user->name }}</h1>
                <p>Email: {{ $user->email }}</p>
                <p>Punteggio attuale: {{ $user->score }}</p>
                <p>Data di registrazione: {{ $user->created_at }}</p>
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
                  
                  <input  type="file" name="avatar" class="my-2 d-block">
                  <button type="submit" class="btn btn-danger px-2" data-mdb-ripple-color="dark"
                  style="z-index: 1;">
                  AGGIORNA
                  </button>
                  
                </form>
                @endif
            </div>
        </div>
    </div>
  </x-layout>
