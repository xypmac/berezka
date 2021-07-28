$(document).ready(function(){
    $('.comments').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        nextArrow:  '<a href="/" class="arrows-container arrows-container-right"><span class="arrow arrow-one"></span><span class="arrow arrow-two"></span><span class="arrow arrow-three"></span></a>',
        prevArrow:  '<a href="/" class="arrows-container arrows-container-left"><span class="arrow arrow-one"></span><span class="arrow arrow-two"></span><span class="arrow arrow-three"></span></a>',
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2
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
  });