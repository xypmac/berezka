$(document).ready(function(){
    let timeout;

    $('.teacher').clone().appendTo($('.popup')).wrap("<div class='popup__item'></div>")
    
    $('.teachers__list').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow: '<div class="teachers__arrow teachers__arrow-prev"><i class="bi bi-chevron-left"></i></div>',
        nextArrow: '<div class="teachers__arrow teachers__arrow-next"><i class="bi bi-chevron-right"></i></div>',
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3
              }
            },
            {
                breakpoint: 576,
                settings: {
                  slidesToShow: 1
                }
              }
          ]
       
        
    });
    
    $('.popup').find('.teacher').append('<span class="popup-close"><i class="bi bi-x "></i></span>');
        
    $('.teacher').click(function(e){
        $('body').data('num', Number($(this).data('id')));
        $('.popup-fade').fadeIn();
        $('.popup').resize();
        clearTimeout(timeout);
        $('.popup').slick({
            initialSlide: $('body').data('num'),
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            adaptiveHeight: true,
            prevArrow: '<div class="teachers__arrow teachers__arrow-prev"><i class="bi bi-chevron-left"></i></div>',
            nextArrow: '<div class="teachers__arrow teachers__arrow-next"><i class="bi bi-chevron-right"></i></div>',
            
        });
        
        return false;
    });
    
    $('.popup-close').click(function(e){
        e.preventDefault();
        $('.popup-fade').fadeOut();
        clearTimeout(timeout);
        timeout = setTimeout(function(){
            $('.popup').slick('unslick');
        }, 500)
        return false;
    });
   
    $(document).keydown(function(e) {
		if (e.keyCode === 27) {
            e.stopPropagation();
			$('.popup-fade').fadeOut();
            clearTimeout(timeout)
            timeout = setTimeout(function(){
                $('.popup').slick('unslick');
            }, 500)
		}
	});
    $('.popup-fade').click(function(e) {
		if ($(e.target).closest('.popup').length == 0) {
            $(this).fadeOut();	
            clearTimeout(timeout);
            timeout = setTimeout(function(){
                $('.popup').slick('unslick');
            }, 500)				
		}
	});	
    
   
});