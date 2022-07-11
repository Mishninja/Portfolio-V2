$(document).ready(function(){

//
jQuery(function($) {

    var windowWidth = $('body').width();
    var navBtn = $('.gn-trigger');
    /*
    Hide/Show Header 
    */
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    function hasScrolled() {
        var st = $(this).scrollTop();

        if(Math.abs(lastScrollTop - st) <= delta) {
          return;
        }

        if (navBtn.hasClass('is-active')){
            $('header').removeClass('header-up').addClass('header-down');
        } else if(st > lastScrollTop && st > navbarHeight){// Scroll Down
            console.log('st: ' + st);
            console.log('lastScrollTop: ' + lastScrollTop);
            $('header').removeClass('header-down').addClass('header-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('header-up').addClass('header-down');
            }
        }
        lastScrollTop = st;
    }

    setInterval(function() {
        if(didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);


    /*
    Navigation   
    */
   
    const targetElement = document.querySelector('.gn');

    $('.gn-trigger').on('click', function(e) {
        e.preventDefault();
        // $(this).toggleClass('is-active');
        if($(this).hasClass('is-active')) {
            $(this).removeClass('is-active');
            $('.gn').slideUp()
            bodyScrollLock.enableBodyScroll(targetElement);
        } else {
            $(this).addClass('is-active');
            $('.gn').slideDown();
            bodyScrollLock.disableBodyScroll(targetElement);
        }
    })

    $(window).resize(function() {
        windowWidth = $('body').width();
        if(windowWidth>767 && $('.gn-trigger').hasClass('is-active')) {
            setTimeout(function() {
                 $('.gn-trigger').removeClass('is-active');
            }, 200);
            $('.gn').slideUp(0)
            bodyScrollLock.enableBodyScroll(targetElement);
        }
    })

    $('.gn a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    bodyScrollLock.enableBodyScroll(targetElement);
    $('.gn-trigger').removeClass('is-active');
    $('.gn').slideUp();
    return false;
});
});
});

/* ===== Accordion ===== */
// var acc = document.querySelectorAll(".accordion-btn");
// var content = document.querySelectorAll(".content");


//Initialize accordion
$(".content-wrapper").accordion({
    active: false,
    collapsible: true,
    header: ".accordion-btn",
})

//When user first loads in, make sure accordion works as expected
//Disable in desktop view
function accordionOnLoad() {
    if (window.innerWidth < 992) {
        $(".content-wrapper").accordion("option", "disabled", false);
    } else if (window.innerWidth >= 992) {
        //display: block for all content panels
        $(".content-wrapper").accordion("option", "disabled", true);
        $(".content-wrapper").accordion("option", "collapsible", false);
    }
}

accordionOnLoad();

//Handles window resizing
//enables and disables accordion according to screen size
function reportWindowSize() {
    var width = window.innerWidth;
    if (width < 992) {
        //check that window is tablet or mobile width
        $(".content-wrapper").accordion("option", "disabled", false);
        $(".content-wrapper").accordion("option", "collapsible", true);
    } else if (window.innerWidth >= 992) {
        //display: block for all content panels
        $(".content-wrapper").accordion("option", "disabled", true);
        $(".content-wrapper").accordion("option", "collapsible", false);
    }
}

window.addEventListener("resize", reportWindowSize);






