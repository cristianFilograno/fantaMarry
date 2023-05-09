<div>
    <div class="row">
        @foreach ($posts as $post)

        <div class="col-4">
          <h1> {{ $post->title }}</h1>
          <p>{{ $post->body }}</p>
          <small>{{$post->user->name}}</small>

          @if ($post->fotoPost)
          <img src="{{ Storage::url($post->fotoPost)}}" class="img-fluid" alt="">
          @else
          <img src="../media/placeholder.jpeg" class="img-fluid" alt="">

          @endif
        </div>

        @endforeach
    </div>
</div>
