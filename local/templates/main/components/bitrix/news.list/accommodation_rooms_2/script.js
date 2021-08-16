$(document).ready(function(){ 
    $('.hotelroom__item:first').children('.room__img').clone().appendTo('.hotelroom__prev');

    $('.popup__modal').find('.hotelroom').append('<span class="popup__close"><i class="bi bi-x "></i></span>');

    let setting = {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<span class="numbers__arrow numbers__arrow-prev"><i class="bi bi-chevron-compact-left"></i></span>',
        nextArrow: '<span class="numbers__arrow numbers__arrow-next"><i class="bi bi-chevron-compact-right"></i></span>',
    };

    // открыть popup
    $(document).on('click', '.number__more', function(){
        $('.rooms__arrows-container').css({'z-index': '-1'});
        $('.header').css({'z-index': '-1'});
        $('.popup__fade').fadeIn();
        $('.popup__modal').resize();
        $('body').css({'overflow': 'hidden'});
        if ($(window).width() < '575.98'){
          $('.hotelroom').resize();
  
        }
        return false;
      });
      $(document).on('click', '.number__title-button', function(){
        if ($(window).width() > '575.98') {
          $('.rooms__arrows-container').css({'z-index': '-1'});
          $('.header').css({'z-index': '-1'});
          $('.popup__fade').fadeIn();
          $('.popup__modal').resize();
          $('body').css({'overflow': 'hidden'});
        }
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
            $('.rooms__arrows-container').css({'z-index': '1'});
            $('.header').css({'z-index': '1'});
            $('.popup__fade').fadeOut();
            $('body').css({'overflow': 'auto'});
        }
    });
    
    // Клик по фону, но не по окну.
    $('.popup__fade').click(function(e) {
        if ($(e.target).closest('.popup__modal').length == 0) {
            $('.rooms__arrows-container').css({'z-index': '1'});
            $('.header').css({'z-index': '1'});
            $(this).fadeOut();
            $('body').css({'overflow': 'auto'});					
        }
    });	
  
    //предпросмотр в popup
    $(document).on('click', '.hotelroom__item', function(){ 
        $('.hotelroom__prev').empty();
        $(this).children('.room__img').clone().appendTo('.hotelroom__prev');
    });

  
    // подключение слайдера в popup
    function slaiderInit(){
        
        if($('.hotelroom').length){
            $('.hotelroom__images:not(.slick-initialized)').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            nextArrow: '<span class="hotelroom__arrow hotelroom__arrow-next"><i class="bi bi-chevron-compact-left"></i></span>',
            prevArrow: '<span class="hotelroom__arrow hotelroom__arrow-prev"><i class="bi bi-chevron-compact-right"></i></span>'
            });
        }
    }
  
  
    function windowSize(){
      if ($(window).width() < '575.98'){
        //удалить слайдер на мобильном
        if($(".hotelroom__slaider").hasClass("slick-initialized")) {
            $(".hotelroom__slaider").slick('unslick');
        }
        $(".hotelroom:not(:first)").hide();

        
        
        slaiderInit();

        if($(".hotelroom__images").hasClass("slick-initialized")) {
            $(".hotelroom__images")[0].slick.refresh();
        }
          
      } else {

        if($(".hotelroom__images").hasClass("slick-initialized")) {
            $(".hotelroom__images").slick('unslick');
        }

        $(".hotelroom:not(:first)").show();
        
        // запустить слайдер
        $('.hotelroom__slaider:not(.slick-initialized)').slick(setting);

        if($(".hotelroom__slaider").hasClass("slick-initialized")) {
            $(".hotelroom__slaider")[0].slick.refresh();
        } 
        
      }
    }
  
    $(window).on('load resize',windowSize); 


});