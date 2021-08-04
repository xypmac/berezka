$(document).ready(function(){
    $('.question').removeClass('question-active');
    $('.question:first').addClass('question-active');
    $('.question:first').children('.answer').clone().appendTo('.answer__wrapper');
    addTitle();
    

    function showAnswer(){
        $('.question').click(function(){
            $('.question').removeClass('question-active');
            
            $(this).addClass('question-active')
            $('.answer__wrapper').empty();
            $(this).children('.answer').clone().appendTo('.answer__wrapper');
            addTitle();
            
    
        });

    }

    function openPopup(){
        $('.question').click(function(){
            $('.answer__wrapper').empty();
            $('.answer__wrapper').show();
            $(this).children('.answer').clone().appendTo('.answer__wrapper');
            $('.answer__wrapper').append('<span class="answer__close"><i class="bi bi-x"></i></span>');
            let text = $(this).children('.question__title').text();
            $( '<h2 class="answer__title"></h2>').text(text).prependTo('.answer__wrapper');
            $('.answer__close').click(function(){
                $('.answer__wrapper').hide();
            });
        });
        $('.answer__close').click(function(){
            $('.answer__wrapper').hide();
        });
       

    }

    function addTitle(){
        if($('.answer__wrapper').find('.answer__title').length == 0){
            let text = $('.question-active').children('.question__title').text();
            $( '<h2 class="answer__title"></h2>').text(text).prependTo('.answer__wrapper');
        }
    }

    function windowSize(){
        if ($(window).width() < '575.98'){
            $('.answer__wrapper').hide();
            $('.question:first').children('.answer').clone().appendTo('.answer__wrapper');
            openPopup();
            
        } else {
            $('.answer__wrapper').show();
            showAnswer();
        }
    }

    $(window).on('load resize',windowSize); 

})