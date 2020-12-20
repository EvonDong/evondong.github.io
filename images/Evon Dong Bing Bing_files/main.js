const selectElement = function (element) {
    return document.querySelector(element);
};

let menuToggler = selectElement('.menu-toggle');

let body = selectElement('body');

menuToggler.addEventListener('click', function() {
    body.classList.toggle('open');
});

// Scroll Reveal

window.sr = ScrollReveal();

sr.reveal('.animate-left', {        // select items with class of animate-left
    origin: 'left',           // where animations coming from
    duration: 1000,          // in millisec
    distance: '25rem',
    delay: 300
})          

sr.reveal('.animate-right', {   
    origin: 'right',          
    duration: 1000,   
    distance: '25rem',
    delay: 600
})          

sr.reveal('.animate-top', {   
    origin: 'top',          
    duration: 1000,   
    distance: '25rem',
    delay: 600
})          

sr.reveal('.animate-bottom', {   
    origin: 'bottom',          
    duration: 1000,   
    distance: '25rem',
    delay: 600
})          
