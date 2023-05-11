<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FM</title>
    <link rel="stylesheet" href="style.css">
   
    @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>
  <body class="w-100">


    <x-navbar />

    <div class="min-vh-100">
        <!-- PSEUDO VARIABILE "SEGNAPOSTO" (in base a ciò che clicchiamo il segnaposto verrà "OCCUPATO" dal CONTENUTO DI CHISIAMO,WELCOME,ECC... -->
        {{$slot}}
        
    </div>

    <x-footer />
    <script src=""></script>
  </body>
</html>