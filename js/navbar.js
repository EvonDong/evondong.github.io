const selectElement = function (element) {
    return document.querySelector(element);
};

let menuToggler = selectElement('.menu-toggle');

let body = selectElement('body');

menuToggler.addEventListener('click', function() {
    body.classList.toggle('open');
});



$(".nav .nav-link").on("click", function(){
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
 });