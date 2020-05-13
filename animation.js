// Smooth Scroll

$(document).ready(function() {
    $('.scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 500; // Durée de l'animation (en ms)
        $('html, body').animate({
            scrollTop: $(page).offset().top
        }, speed); // Go
        return false;
    });
});
// La méthode .offset() renvoie les coordonnées (relatives au document) de l’élément (ici la page ciblée). 
// On modifie la position de la scrollbar (grâce à scrollTop) jusqu’à atteindre cet élément, en animant le défilement avec .animate().



// animation de la page d'accueil

const sr = ScrollReveal();

sr.reveal('.img-fluid', {
    origin: 'right',
    distance: '450px',
    duration: 2000,
    scale: 2,
    reset: false,
});

sr.reveal('.vimy', {
    origin: 'top',
    distance: '10px',
    duration: 2000,
    scale: 0.6,
    reset: false,
});


sr.reveal('.club', {
    delay: 1200,
    origin: 'bottom',
    distance: '20px',
});