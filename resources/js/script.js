// var bottone = document.getElementById("bottoneNascondi");
// bottone.addEventListener("click", function() {
//     var eventi = document.querySelectorAll(".scomparsa");
//     eventi.forEach(function(evento) {
//         if (window.getComputedStyle(evento).display === "none") {
//             evento.style.display = "block";
//             bottone.innerHTML = "Nascondi tutti gli eventi";
//             bottone.classList.remove("btn-success");
//             bottone.classList.add("btn-danger");
//         } else {
//             evento.style.display = "none";
//             bottone.innerHTML = "Mostra tutti gli eventi";
//             bottone.classList.remove("btn-danger");
//             bottone.classList.add("btn-success");
//         }
//     });
// });
var bottone = document.getElementById("bottoneNascondi");
var eventi = document.querySelectorAll(".scomparsa");

    // Funzione per gestire il click sul bottone
    function toggleEventi() {
        eventi.forEach(function(evento) {
            if (window.getComputedStyle(evento).display === "none") {
                evento.style.display = "block";
            } else {
                evento.style.display = "none";
            }
        });

            // Salva lo stato degli eventi nel Web Storage
            var statoEventi = Array.from(eventi).map(function(evento) {
                return evento.style.display;
            });
            localStorage.setItem("statoEventi", JSON.stringify(statoEventi));
        }

        // Ripristina lo stato degli eventi al caricamento della pagina
        if (eventi.length > 0) {
            var statoEventi = JSON.parse(localStorage.getItem("statoEventi"));
            if (statoEventi) {
                eventi.forEach(function(evento, index) {
                    evento.style.display = statoEventi[index];
                });
            }
        }

        // Aggiungi l'evento di click al bottone se l'admin è loggato
        if (bottone) {
            bottone.addEventListener("click", toggleEventi);
        }