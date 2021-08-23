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
        $('.foods__wrapper').css({'z-index': '-1'});
        $('.meal__fade:first').fadeIn();
        $('body').css({'overflow': 'hidden'});
        return false;
      });
      
  
  
    // Клик по ссылке "Закрыть".
    $(document).on('click', '.meal__close', function(){ 
        $('.header').css({'z-index': '1'});
        $('.foods__wrapper').css({'z-index': '1'});
        $(this).parents('.meal__fade').fadeOut();
        $('body').css({'overflow': 'auto'});
        return false;
    });
   
    
    // Закрытие по клавише Esc.
    $(document).keydown(function(e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.meal__fade').fadeOut();
            $('.header').css({'z-index': '1'});
            $('.foods__wrapper').css({'z-index': '1'});
            $('body').css({'overflow': 'auto'});
        }
    });
    
    // Клик по фону, но не по окну.
    $(document).on('click', '.meal__fade', function(e){ 
        if ($(e.target).closest('.meal__popup').length == 0) {
            $(this).fadeOut();
            $('.header').css({'z-index': '1'});
            $('.foods__wrapper').css({'z-index': '1'});
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