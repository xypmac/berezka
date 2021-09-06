
function call_menu_window(sectionId) {
    let modal = BX('modal-window'),
        body = document.body,
        header = BX.findChildrenByClassName(body, 'header');
    if (modal === null) {
        BX.ready(function(){
            let modalContainer = BX.create('div', {
                attrs: {
                    id: 'modal-window'
                },
            });
            BX.append(modalContainer, body);
            BX.ajax.insertToNode(
                '/include/ajax/modal_menu_callme.php?id_section='+sectionId+'',
                modalContainer,
            );
            BX.style(body, 'overflow', 'hidden');
            BX.style(header[0], 'z-index', '1');
        });
    } else return false;
}

BX.ready(function(){

    let body = document.body,
        header = BX.findChildrenByClassName(body, 'header');

    BX.bindDelegate(
        body, 'click', {className: 'meal__close' },
        function(e){
            if(!e) {
                e = window.event;
            }
            BX.remove(BX('modal-window'));
            BX.style(body, 'overflow', 'auto');
            BX.style(header[0], 'z-index', '99');
            return BX.PreventDefault(e);
        }
    );

    BX.bindDelegate(
        body, 'click', {className: 'meal__fade' },
        function(e){
            if(!e) {
                e = window.event;
            }
            BX.remove(BX('modal-window'));
            BX.style(body, 'overflow', 'auto');
            BX.style(header[0], 'z-index', '99');
            return BX.PreventDefault(e);
        }
    );
});

$(document).ready(function(){


    let setting = {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
    };
/*
    // открыть popup
    $(document).on('click', '.food', function(){
        $('.header').css({'z-index': '-1'});
        $('.foods__wrapper').css({'z-index': '-1'});
        $(this).closest('.section-foods').find('.meal__fade').fadeIn();
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
  */
  
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