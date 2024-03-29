window.revelar = ScrollReveal({ reset: false });

ScrollReveal().reveal('.effect-title', {
    delay: 500,
    distance: '20px',
    origin: 'bottom',
    duration: 800,
    opacity: 0,
    scale: 0.5,
    easing: 'cubic-bezier(0.5, 0, 0, 1)',
    reset: true,
    viewFactor: 0.5,
    beforeReveal: function (el) {
        el.classList.add('revealed');
        ScrollReveal().clean(el);
    }
});

ScrollReveal().reveal('.effect-mission', {
    delay: 100,
    distance: '320px',
    origin: 'left',
    duration: 800,
    opacity: 0,
    scale: 0.5,
    easing: 'cubic-bezier(0.5, 0, 0, 1)',
    reset: true,
    viewFactor: 0.5,
    beforeReveal: function (el) {
        el.classList.add('revealed');
        ScrollReveal().clean(el);
    }
});

ScrollReveal().reveal('.effect-vision', {
    delay: 100,
    distance: '320px',
    origin: 'bottom',
    duration: 800,
    opacity: 0,
    scale: 0.5,
    easing: 'cubic-bezier(0.5, 0, 0, 1)',
    reset: true,
    viewFactor: 0.5,
    beforeReveal: function (el) {
        el.classList.add('revealed');
        ScrollReveal().clean(el);
    }
});

ScrollReveal().reveal('.effect-values', {
    delay: 100,
    distance: '320px',
    origin: 'right',
    duration: 800,
    opacity: 0,
    scale: 0.5,
    easing: 'cubic-bezier(0.5, 0, 0, 1)',
    reset: true,
    viewFactor: 0.5,
    beforeReveal: function (el) {
        el.classList.add('revealed');
        ScrollReveal().clean(el);
    }
});

ScrollReveal().reveal('.effect-p', {
    delay: 250,
    distance: '20px',
    origin: 'bottom',
    duration: 800,
    opacity: 0,
    easing: 'cubic-bezier(0.5, 0, 0, 1)',
    reset: true,
    viewFactor: 0.5,
    beforeReveal: function (el) {
        el.classList.add('revealed');
        ScrollReveal().clean(el);
    }
});

