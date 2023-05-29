<div>

    @if (session('postCreated'))
        <div class="alert alert-success">
            {{ session('postCreated') }}
        </div>
    @endif

    @if (session('accessDenied'))
        <div class="alert alert-danger">
            {{ session('accessDenied') }}
        </div>
    @endif

    <h1 class="text-center textB textP fw-bold text-uppercase ">Infama un invitato</h1>
    <form class="container col-12 col-md-9 px-5 py-3 shadow  rounded" enctype="multipart/form-data" wire:submit.prevent='store'>
        {{-- wire:submit.prevent dice al button di 'prevenire' la sua funzione di submit e invece di far scattare la funzione store --}}
        @csrf
        <div class="mb-3">
            <label for="title" class="textF fw-bold form-label">Titolo:</label>
            <input required type="text" class="form-control" id="title" wire:model.lazy="title">{{-- DATA BINDING al posto del 'name' --}}
        </div>
        <div class="mb-3">
            <label for="body" class="textF fw-bold form-label">Descrizione:</label>
            <textarea required class="form-control" id="body" cols="30" rows="10" wire:model.lazy="body"></textarea>

        </div>
        {{-- @if ($cover)
            <div class="mt-3 text-center">
                Anteprima Immagine
                <img width="200px" src="{{ $cover->temporaryUrl() }}">
            </div>
        @endif --}}
        
        {{-- @dd($players) --}}
        <div class="mb-3">
            <label for="fotoPost" class="textF fw-bold form-label">Foto:</label>
            <input type="file" class="form-control" id="fotoPost" wire:model="fotoPost">
        </div>

        {{-- SELECTS --}}
        <div class="mb-3">
            <label for="player" class="textF fw-bold form-label">Giocatore:</label>
            <select required class="form-control" id="player" wire:model="selectedPlayer">
                <option value="">Seleziona un giocatore</option>
                @foreach ($players as $player)
                    <option value="{{ $player->id }}">{{ $player->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="event" class="textF fw-bold form-label">Evento: <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#003049" class="ms-2 bi bi-info-circle-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg></span>
            </label>
           
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <p class=" modal-title fs-5 textB textF fw-bold" id="exampleModalLabel">Spiegazione eventi</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li> <span class="myBorder2">Auguri anticipati</span>  - Invitato/a che fa gli auguri prima della fine della messa</li>
                            <li> <span class="myBorder2">Fotografi non autorizzati </span> - Inviato/a che si alza e scatta foto dai lati o dietro l'altare</li>
                            <li> <span class="myBorder2">Pianto </span> - </li> Invitato/a che piange
                            <li> <span class="myBorder2">Fotografia in compagnia </span> - Invitato/a che vanno con gli sposi per il book</li>
                            <li> <span class="myBorder2">Il/La palestrato/a </span> -Invitato/a che fa esercizi fisici durante il ballo</li>
                            <li> <span class="myBorder2">Vestito macchiato </span> - Invitato/a che si sporca il vestito</li>
                            <li> <span class="myBorder2">1° Evviva gli sposi </span> - Invitato che urla 'Evviva gli sposi'</li>
                            <li> <span class="myBorder2">Prima coppia a ballare </span> - Prima coppia che balla un lento</li>
                            <li> <span class="myBorder2">Capo trenino </span> - Invitato/a che inizia un trenino</li>
                            <li> <span class="myBorder2">Invitato/a pezzato </span> - Invitato/a con l'alone sotto l'ascella</li>
                            <li> <span class="myBorder2">Rottura piatto e bicchiere </span> - Invitato/a che rompe qualcosa</li>
                            <li> <span class="myBorder2">Pesta merda </span> - Invitato/a che pesta escrementi animali</li>
                            <li> <span class="myBorder2">Invitato/a scalza  </span> - Invitato/a che si toglie le scarpe</li>
                            <li> <span class="myBorder2">Brindisi </span> - Invitato/a che fa un brindisi agli sposi</li>
                            <li> <span class="myBorder2">Ritardatari in sala </span> - Invitato/a che arriva tardi alla sala</li>
                            <li> <span class="myBorder2">Vincitore Giarrettiera </span> - invitato che prende la giarrettiera</li>
                            <li> <span class="myBorder2">Il denudato </span> - Invitato/a che si spoglia</li>
                            <li> <span class="myBorder2">Bacio Bacio </span> - Invitato/a che urla 'bacio bacio' agli sposi</li>
                            <li> <span class="myBorder2">Stesso abito </span> - Invitati con lo stesso abito</li>
                            <li> <span class="myBorder2">Tacco vertiginoso </span> - Invitata che indossa un tacco maggiore di 10cm</li>
                            <li> <span class="myBorder2">Abito con dettagli rossi </span> - Invitato/a che porta un abito con presenza di dettagli rosso accesso</li>
                            <li> <span class="myBorder2">Diretta social </span> - Invitato/a che inizia una Diretta Social</li>
                            <li> <span class="myBorder2">Cappello/Coppola </span> - Invitato/a con Cappello o Coppolla</li>
                            <li> <span class="myBorder2">Abito bianco (uomo) </span> - Invitato con abito bianco</li>
                            <li> <span class="myBorder2">Invitato/a che vomita </span> - Invitato/a che vomita</li>
                            <li> <span class="myBorder2">Invitato/a con avanzi </span> - Invitato/a che si porta gli avanzi a casa</li>
                            <li> <span class="myBorder2">Ubriacone/a </span> - Invitato/a che si riduce alle pezze</li>
                            <li> <span class="myBorder2">Dedica agli sposi </span> - Invitato/a che dedica una canzone agli sposi</li>
                            <li> <span class="myBorder2">Bello addormentato </span> - Invitato/a che si addormenta</li>
                            <li> <span class="myBorder2">Vincitrice Bouquet </span> - Invitata che prende il bouquet</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CHIUDI</button>
                    </div>
                  </div>
                </div>
              </div>
            <select required class="form-control" id="event" wire:model="selectedEvent">
                <option value="">Seleziona un bonus</option>
                @if( Auth::user() && Auth::user()->is_admin === 1)
                    @foreach ($events as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                    @endforeach
                @else 
                    @foreach ($eventi as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="text-center mb-0">
            <button type="submit" class="btn btn-primary">Inserisci il post!</button>
            <a href="{{route('homepage')}}" class="btn btn-outline border-primary text-primary">Torna indietro</a>
        </div>

    </form>



    


</div>