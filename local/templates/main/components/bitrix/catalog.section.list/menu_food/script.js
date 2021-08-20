$(document).ready(function(){ 


    let setting = {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
    };

    // открыть popup
    $(document).on('click', '.food', function(){
        $('.header').css({'z-index': '-1'});
        $('.popup__fade').fadeIn();
        $('body').css({'overflow': 'hidden'});
        return false;
      });
      
  
  
    // Клик по ссылке "Закрыть".
    $(document).on('click', '.popup__close', function(){ 
        $('.header').css({'z-index': '1'});
        $(this).parents('.popup__fade').fadeOut();
        $('body').css({'overflow': 'auto'});
        return false;
    });
   
    
    // Закрытие по клавише Esc.
    $(document).keydown(function(e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup__fade').fadeOut();
            $('.header').css({'z-index': '1'});
            $('body').css({'overflow': 'auto'});
        }
    });
    
    // Клик по фону, но не по окну.
    $(document).on('click', '.popup__fade', function(e){ 
        if ($(e.target).closest('.popup__modal').length == 0) {
            $(this).fadeOut();
            $('.header').css({'z-index': '1'});
            $('body').css({'overflow': 'auto'});					
        }

    });
  
  
    function windowSize(){
        if ($(window).width() < '575.98'){
            $('.foods__wrapper:not(.slick-initialized)').slick(setting);
            if($(".foods__wrapper").hasClass("slick-initialized")) {
                $(".foods__wrapper")[0].slick.refresh();
            } 
            
        } else {
            if($(".foods__wrapper").hasClass("slick-initialized")) {
                $(".foods__wrapper").slick('unslick');
            }
        }
    }
  
    $(window).on('load resize',windowSize); 


});