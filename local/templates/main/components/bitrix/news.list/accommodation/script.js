$(document).ready(function(){
    $('.accommodation__item').click(function(){
        $('.accommodation__preview').children().remove();
        $(this).children('.accommodation__img').clone().appendTo($('.accommodation__preview'));
    });
});