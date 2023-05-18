<x-layout>
  <body>

    <main class="col-12 col-md-10 mx-auto">
      <div id="header">
        
        <h1>Ranking</h1>
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