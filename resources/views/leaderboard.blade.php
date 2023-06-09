<x-layout>
  <body>

    <main class="col-12 col-md-10 mx-auto">
      <div class="text-center" id="header">
        
        <h1 class="mx-auto textP textA">CLASSIFICA</h1>
      </div>
      <div id="leaderboard">
        <div class="ribbon"></div>
        <table>
          {{-- METODO FOR --}}
          {{-- @for ($i = 0; $i < count($users); $i++)
          <tr>
            
            <td class="number">{{$i + 1}}</td>
            <td class="name">{{$users[$i]->name}}</td>
            <td class="points"> {{ $users[$i]->score}}
              @if ($i == 0)
              <img class="gold-medal" src="https://github.com/malunaridev/Challenges-iCodeThis/blob/master/4-leaderboard/assets/gold-medal.png?raw=true" alt="gold medal"/>

              @endif 
             </td>
          </tr>

          @endfor --}}

          {{-- METODO FOREACH --}}
          @foreach ($teams as $team)
          <tr>

            
          <td class="number">{{$loop->iteration}}</td>
           <td class="name"> <a class="anchorLb" href="{{route('user.profile', ['userId'=>$team->user->id])}}">{{$team->name}}</a></td>
            <td class="points"> {{ $team->scoreTeam}}
              @if ($loop->iteration == 1)
              <img class="gold-medal" src="https://github.com/malunaridev/Challenges-iCodeThis/blob/master/4-leaderboard/assets/gold-medal.png?raw=true" alt="gold medal"/>
              
              @endif
              {{-- MALUS PER MIG --}}
              @if ($team->name == 'MB')
              <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg class="ms-3 mb-2" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="red" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                </svg>
              </span>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <p class=" modal-title fs-5 textB textF fw-bold text-danger" id="exampleModalLabel">MALUS: -30pt</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="lead text-dark fw-bold mb-0">Il seguente TEAM verrà penalizzato per non aver rispettato il punto 2.1 della sezione <a href="{{route('regole')}}"></a> REGOLE</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CHIUDI</button>
                    </div>
                  </div>
                </div>
              </div>

              @endif 
 
              
             </td>
             
            </tr>
              
          @endforeach
          
        </table>
        {{-- <div id="buttons">
          <button class="exit">Exit</button>
          <button class="continue">Continue</button>
        </div> --}}
      </div>
    </main>
  </body>
  
  </x-layout>