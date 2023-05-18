<x-layout>
    
  <div class="my-5">
    {{-- COMPONENTE LIVEWIRE --}}
    @livewire('create-post-form')
  </div>


  <div class="my-5 container">
    @livewire('show-posts')
  </div>
 

    
    @livewireScripts
    <script>
      Livewire.on('postCreated', () => {
          Livewire.emit('refreshPosts');
      });
  </script>


</x-layout>