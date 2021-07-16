$(document).ready(function() {
    $('.menu__button').click(function() {
        $('.menu__button').toggleClass('menu__open');
        $('.menu__wrapper').toggleClass('menu__open');
    });
});