$(function() {
    var btnTrigger = $(".btn-trigger");
    btnTrigger.on("click", function() {
        btnTrigger.toggleClass("active");
        $(".header-sp-nav").fadeToggle(500);
        return false;
    });
    $("#acMenu dt").on("click", function() {
        $(this).next().slideToggle();
    });
    AOS.init({
        duration: 2000,
    });
    $('.swiper-wrapper').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '12%',
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
          {
            breakpoint: 900,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              centerPadding: '5%',
            }
          },
          {
            breakpoint: 700,
            settings: {
              slidesToShow: 1.5,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 432,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: 0,
              }
          },
        ]
      });
    
    $('a[href^="#"]').click(function() {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == '#' || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({scrollTop:position - 80}, speed, "swing");
    })
});