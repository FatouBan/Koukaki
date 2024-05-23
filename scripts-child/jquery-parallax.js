// Parallax logo
document.addEventListener('DOMContentLoaded', function() {
    var banner = document.getElementById('banner');

    window.addEventListener('scroll', function() {
      var scrollPosition = window.scrollY;
      banner.transform = 'translateY(' + (scrollPosition / 2) + 'px)';
    });
  });

// Parallax clouds
(function($) {
  $(document).ready(function() {

    function parallaxClouds() {
      console.log("Parallax function called...")
      var scrollTop = $(window).scrollTop();
      var cloud1 = $('#big_cloud');
      var cloud2 = $('#little_cloud');

      var cloud1ScrollPosition = -scrollTop / 3;
      var cloud2ScrollPosition = -scrollTop / 3;

      cloud1ScrollPosition = Math.min(cloud1ScrollPosition, -550);
      cloud2ScrollPosition = Math.min(cloud2ScrollPosition, -550);
      
      cloud1ScrollPosition = Math.max(cloud1ScrollPosition, -850);
      cloud2ScrollPosition = Math.max(cloud2ScrollPosition, -850);

      cloud1.css('transform', 'translateX(' + cloud1ScrollPosition + 'px)');
      cloud2.css('transform', 'translateX(' + cloud2ScrollPosition + 'px)');
    }

    $(window).scroll(function() {
      parallaxClouds();
    });

    parallaxClouds();
  });
})(jQuery);

document.addEventListener("DOMContentLoaded", function() {
  var selectors = [
    '.story__article::after',
    '.story h2::after',
    '.site-footer ul::after',
    '.nomination::before',
    '.nomination::after',
    '#studio h2::before',
    '#studio h2::after'
  ];

  var flowers = [];

  // Utilisez un forEach pour parcourir chaque sélecteur
  selectors.forEach(function(selector) {
    console.log('les fleurs tournent plus vite au scroll')
    // Utilisez querySelectorAll pour chaque sélecteur individuel
    var elements = document.querySelectorAll(selector);

    // Ajoutez tous les éléments correspondants à la liste flowers
    elements.forEach(function(element) {
      flowers.push(element);
    });
  });

  window.addEventListener("scroll", function() {
    // Calcul de la nouvelle durée en fonction du défilement
    var scrollSpeed = 0.1; // Ajustez la vitesse de défilement selon vos besoins
    var scrollPosition = window.scrollY;
    var rotationDuration = 15 - (scrollPosition * scrollSpeed);

    // Appliquer la nouvelle durée de l'animation à chaque élément
    flowers.forEach(function(flower) {
      flower.style.animationDuration = `${Math.max(rotationDuration, 3)}s`;
    });
  });
});

