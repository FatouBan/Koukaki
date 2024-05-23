document.addEventListener("DOMContentLoaded", function () {
  monScript();
});


function monScript() {

// Fonction pour les titres lorsqu'on les observe
(function() {
    const ratio = 0.1;
    const options = {
      root: null,
      rootMargin: '0px',
      threshold: ratio
    };
  
    const handleIntersect = function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.intersectionRatio > ratio) {
          entry.target.classList.add('show');
          console.log('les classes sont déclenchée')
          observer.unobserve(entry.target);
        }
      });
    };
  
    const observer = new IntersectionObserver(handleIntersect, options);
  
    document.querySelectorAll('.fade-in-up, .parallax-title').forEach(function(r) {
      observer.observe(r);
    });
  })();

  // Fonction bouton
  (function($) {
    $(".navbar-open").click(function () {
    console.log("navbar-trigger cliqué");
    $(".navbar-content").animate({ height: "toggle", opacity: "toggle" }, 1000);
    $(".navbar-content").toggleClass("open");
    $(".navbar-burger").toggleClass("close");
  });
  $("a").click(function () {
    if ($(".navbar-content").hasClass("open")) {
      $(".navbar-content").animate(
        { height: "toggle", opacity: "toggle" },
        1000
      );
      $(".navbar-content").removeClass("open");
      $(".navbar-burger").removeClass("close");
    }
  });    
})(jQuery)
}

document.addEventListener('DOMContentLoaded', function() {
  // Attendre que la page soit complètement chargée

  // Sélectionner les éléments nécessaires
  var image = document.querySelector('#banner-img');
  var video = document.querySelector('#video-bg');

  // Écouter l'événement de chargement de la vidéo
  video.addEventListener('loadeddata', function() {
      // Masquer l'image et afficher la vidéo
      image.style.display = 'none';
      video.style.display = 'block';
  });
});
