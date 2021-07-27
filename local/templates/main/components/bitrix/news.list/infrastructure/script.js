$(document).ready(function() {
    $(".infrastructure__item").mousemove(
        
        function(event){  
            let helper = $(this).children('.infrastructure__item-helper');
            let left = event.pageX + 10;
            let top = event.pageY + 10;
            helper.show();
            helper.css({
                display: 'block',
                top: top,
                left: left
            });
            if((helper.offset().left + helper.width()) > $(window).width() ) {
                helper.css({
                    display: 'block',
                    top: top,
                    left: left - helper.width() - 30
                })
            } 
        })
        .mouseleave(function() {
        $(this).children('.infrastructure__item-helper').hide();  
        }); 
})