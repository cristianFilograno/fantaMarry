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

    <form class="shadow p-5 rounded" enctype="multipart/form-data" wire:submit.prevent='store'>
        {{-- wire:submit.prevent dice al button di 'prevenire' la sua funzione di submit e invece di far scattare la funzione store --}}
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo dell'Articolo:</label>
            <input required type="text" class="form-control" id="title" wire:model.lazy="title">{{-- DATA BINDING al posto del 'name' --}}
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo dell'Articolo:</label>
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
            <label for="fotoPost" class="form-label">Copertina dell'Articolo:</label>
            <input type="file" class="form-control" id="fotoPost" wire:model="fotoPost">
        </div>

        {{-- SELECTS --}}
        <div class="mb-3">
            <label for="player" class="form-label">Giocatore:</label>
            <select required class="form-control" id="player" wire:model="selectedPlayer">
                <option value="">Seleziona un giocatore</option>
                @foreach ($players as $player)
                    <option value="{{ $player->id }}">{{ $player->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="event" class="form-label">Evento:</label>
            <select required class="form-control" id="event" wire:model="selectedEvent">
                <option value="">Seleziona un bonus</option>
                @foreach ($events as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Inserisci il post!</button>
        <a href="{{route('post.index')}}" class="btn btn-outline border-primary text-primary">Torna indietro</a>

    </form>



    


</div>