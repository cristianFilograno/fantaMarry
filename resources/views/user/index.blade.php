<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FM</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  </head>
  <body>

    <x-navbar />

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
    
    
    <x-footer />
    <script src=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>