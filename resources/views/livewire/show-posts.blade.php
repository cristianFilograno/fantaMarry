<div class="">
  @foreach ($posts as $post)
  <div class="col-12 col-md-8 mx-auto rounded post myBorder my-2 ">
    
    <div class="mx-0 px-0 bgA d-flex">
    @if ($post->user->avatar)
    <img src="{{ Storage::url($post->user->avatar)}}" class="cardImg" alt="">    
    @else
    <img src="/media/placeholder.jpeg" class="cardImg" alt="">
    @endif
    <h1 class="textB textF fw-bold mt-3 mt-md-2 py-3"> {{ $post->user->name }}</h1>

    </div>

    <div class="d-flex justify-content-center align-items-center bg-dark">
      @if ($post->fotoPost)
      <img src="{{ Storage::url($post->fotoPost)}}" class=" cardPost" alt="">    
      @endif  
    </div>
    
    <div class=" bg-light my-0 py-3 px-3">
      <p class="fw-bold lead ">{{ $post->title }}</p>
      <p class="lead mb-0">{{ $post->body }}</p>
      <small class="text-muted font-italic">Pubblicato alle {{$post->created_at->format( "H:i:s" )}} del {{$post->created_at->format(" m/d")}}</small>

    </div>

  </div>
    @endforeach
  </div>


