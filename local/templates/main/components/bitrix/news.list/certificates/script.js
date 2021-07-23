$(document).ready(function() {
    $('.documents__item').click(function(event){
        event.preventDefault();
        clearWindow();
        $('.documents__fade').fadeIn(300);
        $('body').css({'overflow': 'hidden'});
       $(this).children().clone().appendTo($('.documents__window'));
        
        return false;
    });

    // Клик по ссылке "Закрыть".
    $('.documents__close').click(function() {
        $(this).parents('.documents__fade').fadeOut(100);
        clearWindow();
        $('body').css({'overflow': 'auto'});
        return false;
    });  
    // Закрытие по клавише Esc.
    $(document).keydown(function(e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.documents__fade').fadeOut(100);
            clearWindow();
            $('body').css({'overflow': 'auto'});
        }
    });
    
    // Клик по фону, но не по окну.
    $('.documents__fade').click(function(e) {
        if ($(e.target).closest('.documents__window').length == 0) {
            $(this).fadeOut(100);
            clearWindow();
            $('body').css({'overflow': 'auto'});					
        }
    });	

    function clearWindow(){
        $('.documents__window').contents().filter(function () {
            return this.id != "noRemove";
        }).remove();
    }
})