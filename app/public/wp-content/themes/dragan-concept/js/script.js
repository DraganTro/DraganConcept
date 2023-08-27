jQuery(document).ready(function($) {
    // Creating the IntersectionObserver
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('inview');
        } else {
          entry.target.classList.remove('inview');
        }
      });
    });
    // Observing the elements
    const elements = document.querySelectorAll('.animate-from-right, .animate-from-left, .floating-cat, .fade-in-up-about');
    elements.forEach(element => observer.observe(element));
    });