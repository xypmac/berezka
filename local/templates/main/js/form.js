function call_modal_window() {
    let modal = BX('modal-window');
    if (modal === null) {
        BX.ready(function(){
            let modalContainer = BX.create('div', {
                attrs: {
                    id: 'modal-window'
                },
            });
            let body = document.querySelectorAll('body');
            BX.append(modalContainer, body[0]);
            BX.ajax.insertToNode(
                '/include/ajax/modal_window_callme.php',
                modalContainer,
            );
        });
    } else return false;
}

function close_modal() {
    BX.remove(BX('modal-window'));
}

/*
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

 */