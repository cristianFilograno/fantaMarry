<nav class="navbar navbar-expand-md py-3 myNavBg">
    <div class="container-fluid">
      <a class="navbar-brand anchorNav" href="{{route('homepage')}}">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active anchorNav" aria-current="page" href="{{route('regole')}}">Regole</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active anchorNav" aria-current="page" href="{{route('leaderboard')}}">Classifica</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active anchorNav" aria-current="page" href="{{route('post.index')}}">Spotted</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active anchorNav" href="{{route('user.index')}}";>Giocatori</a>
          </li>
        </ul>

      </div>

      <div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @Auth
          <div class="d-flex">
            {{-- DROPDOWN --}}
            <div class="nav-item dropdown me-3">
              <a class="nav-link dropdown-toggle anchorNav" href="#" data-bs-toggle="dropdown" >
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
              </a>
              <ul class="dropdown-menu mydd">
                <li>
                  <a class="dropdown-item fw-bold" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                  {{-- FORM FATTO ESCLUSIVAMENTE PER USARE IL METODO POST E COLLEGARCI ALLA HIDDEN ROUTE --}}
                  <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">
                    @Csrf
                  </form>
                </li>
                <li><a class="dropdown-item fw-bold" href="{{route('user.profile', ['userId'=>Auth::user()->id])}}">Profilo</a></li>
                <li><a class="dropdown-item fw-bold" href="{{route('team.create')}}">Crea il tuo Team</a></li>
              </ul>
            </div>
            {{-- <li class="nav-item">  
              <a class="nav-link px-2 anchorNav" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
              {{-- FORM FATTO ESCLUSIVAMENTE PER USARE IL METODO POST E COLLEGARCI ALLA HIDDEN ROUTE 
              <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">
                @Csrf
              </form>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link active anchorNav" href="";>Bentornato {{Auth::user()->name}}</a>
            </li>
          </div>
          @else
          <li class="nav-item">
            <a class="nav-link active anchorNav" href="{{route('login')}}";>Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active anchorNav" href="{{route('register')}}";>Registrati</a>
          </li>
          
          @endAuth
        </ul>
      </div>

      
    </div>
  </nav>