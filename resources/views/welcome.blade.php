<x-layout>

    <div class="container col-xxl-8 px-4 py-5 shadow glass my-5">
        <div class="row flex-lg-row-reverse align-items-center mx-0 justify-content-center w-100">
          <div class="col-12 col-md-6">
            <img src="https://cdn0.matrimonio.com/vendor/6037/3_2/960/jpg/img-8089_2_86037-165842227029830.jpeg" class="heroImg d-block mx-auto img-fluid my-3" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold mb-3 heroTitle text-center">FANTAMARRY</h1>
            <p class="lead heroBod">Benvenuti a "FantaMarry", l'app che trasforma il matrimonio in una gara emozionante tra gli invitati! Con "FantaMarry", <span class="fw-bold ">ogni ospite diventa un giocatore</span> e riceve punti in base al proprio comportamento durante l'evento. Non si tratta solo di ballare e divertirsi, ma anche di ottenere punti <span class="fw-bold ">bonus</span> per gesti di gentilezza e attenzione verso gli sposi, e di evitare i <span class="fw-bold ">malus</span> per comportamenti inappropriati o poco rispettosi.</p>
            <div class="gap-5 d-flex justify-content-center">
              <a href="{{ route('regole') }}" type="button" href="" class="btn btn-primary btn-lg px-4 me-md-2">Regole</a>
              <a href="{{ route('register') }}" type="button" class="btn btn-outline-secondary btn-lg px-4">Iscriviti</a>
            </div>
          </div>
        </div>
      </div>


      {{-- SEZIONE CON  p3 PALLINI DIMOSTRATIVI/TUTORIAL CLASSIFICA, ISCRIVITI ECC --}}

      {{-- 1 --}}
      <div class="row w-100 mx-0">
        <div class="col-12 col-md-4 px-0 position-relative">
          <img src="media/rgb.jpg" alt="" class="img-fluid">
          <svg viewbox="0 0 200 200" class="mysvg" xmlns="http://www.w3.org/2000/svg">
            <path fill="#FFED00" d="M40.3,-72.1C51.6,-63.4,59.5,-51.1,60.7,-38.5C61.9,-25.9,56.4,-13,51.4,-2.9C46.4,7.2,42,14.4,40.7,27C39.5,39.5,41.4,57.3,35.2,64.3C28.9,71.3,14.5,67.5,2.9,62.4C-8.7,57.4,-17.3,51.2,-28.6,47.1C-39.8,43,-53.7,41,-56,33.5C-58.3,26,-49.1,13,-50.3,-0.7C-51.5,-14.4,-63.1,-28.8,-60.1,-35C-57,-41.2,-39.3,-39.4,-26.9,-47.4C-14.4,-55.4,-7.2,-73.4,3.7,-79.8C14.5,-86.1,29.1,-80.9,40.3,-72.1Z" transform="translate(100 100)" />
          </svg>
        </div>
        <div class="col-12 col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore odit saepe quis quidem, corporis doloremque molestiae sed, incidunt illum eaque molestias autem esse impedit. Facere dolor tenetur saepe iure iste.</p>
        </div>
      </div>
      {{-- 2 --}}
      <div class="row w-100 mx-0">
        <div class="col-12 col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore odit saepe quis quidem, corporis doloremque molestiae sed, incidunt illum eaque molestias autem esse impedit. Facere dolor tenetur saepe iure iste.</p>
        </div>
        <div class="col-12 col-md-4 px-0 position-relative">
          <svg viewBox="0 0 200 200" class="mysvg" xmlns="http://www.w3.org/2000/svg">
            <path fill="#FFED00" d="M39.5,-48.8C48,-48.1,49.6,-32.4,57.7,-16.6C65.8,-0.8,80.4,15,80.9,30.3C81.5,45.5,67.9,60.2,52.1,67.6C36.2,75.1,18.1,75.3,0,75.4C-18.2,75.5,-36.4,75.3,-46.3,65.9C-56.3,56.5,-58,38,-58.7,22.3C-59.3,6.6,-58.9,-6.2,-49.1,-9.7C-39.4,-13.3,-20.3,-7.5,-10.6,-7.7C-0.9,-8,-0.4,-14.2,7.5,-24.5C15.5,-34.9,30.9,-49.4,39.5,-48.8Z" transform="translate(100 100)" />
          </svg>
        </div>
      </div>
      {{-- 3 --}}
      <div class="row w-100 mx-0">
        <div class="col-12 col-md-4 px-0 position-relative">
          <svg viewBox="0 0 200 200" class="mysvg" xmlns="http://www.w3.org/2000/svg">
            <path fill="#FFED00" d="M28.6,-40.7C42.5,-29.4,62.7,-28.2,74,-18.2C85.3,-8.2,87.7,10.5,80,23.4C72.3,36.3,54.4,43.3,39.4,49.3C24.4,55.3,12.2,60.2,0,60.3C-12.3,60.4,-24.6,55.5,-37.4,48.8C-50.2,42.1,-63.6,33.6,-69.9,21.1C-76.1,8.6,-75.3,-7.8,-70.6,-23.3C-66,-38.8,-57.7,-53.3,-45.3,-65.1C-32.9,-76.8,-16.5,-85.7,-4.5,-79.5C7.4,-73.3,14.8,-52,28.6,-40.7Z" transform="translate(100 100)" />
          </svg>
        </div>
        <div class="col-12 col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore odit saepe quis quidem, corporis doloremque molestiae sed, incidunt illum eaque molestias autem esse impedit. Facere dolor tenetur saepe iure iste.</p>
        </div>
      </div>
      


</x-layout>