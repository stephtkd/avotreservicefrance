$(document).ready(function() {
    // clic sur les bouton top pour revenir en haut
    $(".btn-top").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    })

    // On ouvre et ferme le formulaire de contact
    $("#ButtonContactMe").click(function() {
        $("#formContact").toggle(800);
    });

    // On ajoute l'ombre au ardoise quand on survol
    $(".lien-ardoise").hover(function() {
            // Quand on survole une ardoise, on déclenche l'ombre et on la retire
            $(this).find(".ardoise-img").last().addClass("ardoise-ombre");
        },
        function() {
            $(this).find(".ardoise-img").last().removeClass("ardoise-ombre");
        }
    );
});

// Observer les évenements pour déterminer quand un élément est visible 
// grâce à Intersection Observer API (pour jouer les animations)
// cf https://developer.mozilla.org/fr/docs/Web/API/Intersection_Observer_API
const ratio = .8 // ratio au-delà duquel on considère l'élément comme visible
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
}

const handleIntersectArdoise = function(entries, observer) {
    entries.forEach(function(entry) {
        console.log(entry.intersectionRatio);
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add('ardoise-animation')
            observer.unobserve(entry.target)
            console.log('ok');
        }
    })
}


//document.documentElement.classList.add('reveal-loaded')

window.addEventListener("DOMContentLoaded", function() {
    const observerArdoise = new IntersectionObserver(handleIntersectArdoise, options)

    const ardoises = document.querySelectorAll('.ardoise-contenant')
    ardoises.forEach(function(ardoise) {
        observerArdoise.observe(ardoise)
    })

})