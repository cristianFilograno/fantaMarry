<x-layout>
    
    <div class="my-5">
      <div class="row justify-content-center">

        <div class="col-12 col-md-8">

              {{-- COMPONENTE LIVEWIRE --}}
              @livewire('create-post-form')
          </div>
      </div>
    </div>

  <hr><hr><hr>

  @livewire('show-posts')
 

    
    @livewireScripts
    <script>
      Livewire.on('postCreated', () => {
          Livewire.emit('refreshPosts');
      });
  </script>


</x-layout>