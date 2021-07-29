$(document).ready(function(){

    $('.gallery__item').click(function(event){
        $('.gallery__show').empty();
        $(this).children('.gallery__img').clone().appendTo('.gallery__show');
    });
})