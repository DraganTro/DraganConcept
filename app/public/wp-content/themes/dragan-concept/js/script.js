jQuery(document).ready(function($) {
  const elements = document.querySelectorAll('.animate-from-right, .animate-from-left, .floating-cat, .fade-in-up-about, .fade-in-up-card');
  
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting && entry.intersectionRatio >= 0.1) {
        entry.target.classList.add('inview');
        observer.unobserve(entry.target); 
      } else {
        entry.target.classList.remove('inview');
      }
    });
  }, { threshold: 0.1 }); // Défini le seuil d'apparition à 0.1 

  elements.forEach(element => {
    observer.observe(element);
  });
});



jQuery(document).ready(function($) {
  const heroText = document.querySelector('.hero-text');

  if (heroText) {
    heroText.classList.add('inview');
  }
});