<nav class="">
    <div class="px-3 w-100 navbar navbar-expand-md py-2 bgP">
      
      <a class="navbar-brand fs-2 anchorNav textP textA" href="{{route('homepage')}}">FantaMatrimonio</a>
       
      {{-- BUTTONE DROP DOWN RESPONSIVE !rendi bianco! --}}
      <button class="navbar-toggler navButton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      {{-- INIZIO DROPDOWN RESPONSIBE NAV --}}
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0 text-center">
          
        <div class="d-flex p-2 shadow align-items-center d-md-none" >

          @Auth
            @if(Auth::user()->avatar)
              <img src="{{Storage::url(Auth::user()->avatar)}}" class="rounded-pill" width="120px" height="120px" alt="">
            @else
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
            @endif
            <ul class="list-unstyled">
              <li class="nav-item ms-3">
                <a class="nav-link active anchorNav" href="";>Bentornato {{Auth::user()->name}} </a>
              </li>
              
              <div class="row align-items-center ">
                <div class="col-7 text-start">
                  <li><a class="nav-link active anchorNav lead ms-3" href="{{route('user.profile', ['userId'=>Auth::user()->id])}}">Profilo</a></li>
                  <li><a class="nav-link active anchorNav lead ms-3" href="{{route('team.create')}}">Crea il tuo Team</a></li>

                </div>
                <div class="col-3 px-0">
                  <li class="nav-item ms-3">
                    <a class="nav-link active anchorNav lead" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                      <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="red" class="bi bi-box-arrow-left fw-bold" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                      </svg>
                    </a>
                    {{-- FORM FATTO ESCLUSIVAMENTE PER USARE IL METODO POST E COLLEGARCI ALLA HIDDEN ROUTE --}}
                    <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">
                      @Csrf
                    </form>
                  </li>

                </div>
              </div>
              
            </ul>
          @else
          
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-person-circle me-4" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            <li class="nav-item me-4">
              <a class=" py-0 px-3 btn nav-link active anchorNav  lead" href="{{route('login')}}";>Login</a>
            </li>
            <li class="nav-item ">
              <a class="btn py-0 px-3 nav-link active anchorNav lead" href="{{route('register')}}";>Registrati</a>
            </li>
          

          @endAuth
        </div>

          
          <li class="nav-item">
            <a class="nav-link active anchorNav borderY" aria-current="page" href="{{route('regole')}}">Regole</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active anchorNav borderY" aria-current="page" href="{{route('leaderboard')}}">Classifica</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active anchorNav borderY" aria-current="page" href="{{route('post.index')}}">Spia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active anchorNav borderY" href="{{route('user.index')}}";>Giocatori</a>
          </li>
        </ul>
     </div>
     <div class="dnone align-items-center">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <div class="d-flex">
          
          <div class="nav-item dropdown me-3"> 
              <a class="nav-link dropdown-toggle anchorNav p-0" href="#" data-bs-toggle="dropdown">
                @if(Auth::user() && Auth::user()->avatar)
                  <img src="{{Storage::url(Auth::user()->avatar)}}" class="rounded-pill" width="60px" height="60px" alt="">
                    
                @else
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                    
                @endif
            </a>
            @Auth
            <ul class="dropdown-menu mydd">
           <li>
                <a class="dropdown-item fw-bold" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                
                <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">
                  @Csrf
                </form>
              </li>
              <li><a class="dropdown-item fw-bold" href="{{route('user.profile', ['userId'=>Auth::user()->id])}}">Profilo</a></li>
              <li><a class="dropdown-item fw-bold" href="{{route('team.create')}}">Crea il tuo Team</a></li>
            </ul>
          </div>
          
          <li class="nav-item">
            <a class="nav-link active anchorNav borderY pb-0" href="";>Bentornato {{Auth::user()->name}}</a>
          </li>
        </div>
        @else
        <ul class="dropdown-menu  ">
          <li>
            <a class="dropdown-item fw-bold" href="{{route('login')}}";>Login</a>
          </li>
          <li>
            <a class="dropdown-item fw-bold" href="{{route('register')}}";>Registrati</a>
          </li>
        </ul>
        @endAuth
      </ul>
    </div>
    </div>
    
      {{--FINE DROPDOWN RESPONSIBE NAV --}}

      
     


  </nav>