$(document).ready(function(){
    let id = $('.rooms__button-active').prop('id');
    $('.rooms__wrapper#'+id).show();
    $('.hotelroom__item:first').children('.room__img').clone().appendTo('.hotelroom__prev');


    let setting = {
      autoplaySpeed: 5000,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      nextArrow: '<p class="rooms__arrows-container container-next"><span class="rooms__arrow rooms__arrow-one"></span><span class="rooms__arrow rooms__arrow-two"></span><span class="rooms__arrow rooms__arrow-three"></span></p>',
      prevArrow: '<p class="rooms__arrows-container container-prev"><span class="rooms__arrow rooms__arrow-one"></span><span class="rooms__arrow rooms__arrow-two"></span><span class="rooms__arrow rooms__arrow-three"></span></p>',
      responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              centerMode: true,
              centerPadding: '20px'
            }
          },
          {
              breakpoint: 576,
              settings: {
                  slidesToShow: 1,
                  centerMode: true,
                  centerPadding: '60px',
                  arrows: false
              }
          },
          {
              breakpoint: 450,
              settings: {
                  slidesToShow: 1,
                  centerMode: true,
                  centerPadding: '50px',
                  arrows: false
              }
            },
          {
              breakpoint: 400,
              settings: {
                  slidesToShow: 1,
                  centerMode: true,
                  centerPadding: '20px',
                  arrows: false
              }
            }
        ]
    }
        
    $('.rooms__wrapper#'+id).slick(setting);

    // переключение слайдеров при нажатии кнопок
    $('.rooms__button').click(function(event){
      $('.rooms__wrapper#'+id).slick('unslick').hide();
      
      $('.rooms__button').removeClass('rooms__button-active');
      $(this).addClass('rooms__button-active');
      
      id = $(this).prop('id');
      $('.rooms__wrapper#'+id).slick(setting).show();

    });

    // открыть popup
    $(document).on('click', '.room__button', function(){
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
    $(document).on('click', '.room', function(){
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
  $('.popup__close').click(function() {
      $('.rooms__arrows-container').css({'z-index': '1'});
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
  $('.hotelroom__item').click(function(){
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
        slaiderInit();

        if($(".hotelroom__images").hasClass("slick-initialized")) {
          $(".hotelroom__images")[0].slick.refresh();
        }
        
    } else {
      if($(".hotelroom__images").hasClass("slick-initialized")) {
        $(".hotelroom__images").slick('unslick');
      }
    }
  }

  $(window).on('load resize',windowSize); 
    
});