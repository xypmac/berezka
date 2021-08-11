$(document).ready(function(){

    $('.message__button').click(function(e){
        e.preventDefault();
        $('.header').css({'z-index': '-1'});
        $('.form__fade').fadeIn();
    })
    
    $('.form__reset').click(function(e){
        e.preventDefault();
        $('.header').css({'z-index': '1'});
        $('.form__fade').fadeOut();
        return false;
    });
    $('.form__close').click(function(e){
        e.preventDefault();
        $('.header').css({'z-index': '1'});
        $('.form__fade').fadeOut();
        return false;
    });
    
    $(document).keydown(function(e) {
		if (e.keyCode === 27) {
            e.stopPropagation();
            $('.header').css({'z-index': '1'});
			$('.form__fade').fadeOut();
		}
	});

    $('.form__fade').click(function(e) {
		if ($(e.target).closest('.form__wrapper').length == 0) {
            $('.header').css({'z-index': '1'});
            $(this).fadeOut();	
		}
	});	
   
})