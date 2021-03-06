jQuery(document).ready(function(){
    if(window.innerWidth > 769){
        jQuery(window).scroll(function(){
            if (jQuery(this).scrollTop() > 150) {
                jQuery('#menu').addClass('hide');
            } else {
                jQuery('#menu').removeClass('hide');
            }
        });
        
        jQuery(window).scroll(function(){
            if (jQuery(this).scrollTop() > 150) {
                jQuery('#ham').addClass('show');
            } else {
                jQuery('#ham').removeClass('show');
            }
        });

        jQuery('.hamburger').on('click', function(){
            jQuery('#menu').removeClass('hide'); 
            jQuery('#ham').removeClass('show');
        });
    };

    if(window.innerWidth < 768){

        // Open Panel
        jQuery('.hamburger').on('click', function() {
            jQuery(".pannel").toggleClass("menu--open");
        });

        jQuery('.menu__list__item').on('click', function() {
            jQuery(".pannel").removeClass("menu--open");
            jQuery(".hamburger").removeClass("is-active");
        });

        var jQueryhamburger = jQuery(".hamburger");
        jQueryhamburger.on("click", function(e) {
            jQueryhamburger.toggleClass("is-active");
        });
    };
});


        //swiper carousel
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            loopFillGroupWithBlank: true,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                100: {
                  slidesPerView: 1,
                  spaceBetween: 20,
                },
                768: {
                  slidesPerView: 2,
                  spaceBetween: 40,
                },
                1024: {
                  slidesPerView: 3,
                  spaceBetween: 50,
                },
            },
          });


// GSAP Animation


