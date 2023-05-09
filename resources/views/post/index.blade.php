<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FM</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    @livewireStyles

  </head>
  <body class="w-100">


    <x-navbar />

    

    <div class="container my-5">
      <div class="row justify-content-center">
          <div class="col-12 col-md-8">

              {{-- COMPONENTE LIVEWIRE --}}
              @livewire('create-post-form')
          </div>
      </div>
    </div>

  <hr><hr><hr>

  @livewire('show-posts')
 

    <x-footer />
    
    @livewireScripts
    <script>
      Livewire.on('postCreated', () => {
          Livewire.emit('refreshPosts');
      });
  </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>