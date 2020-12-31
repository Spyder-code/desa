// $(window).scroll(function () { 
//     var a = $(this).scrollTop();
//     if(a>=0 && a<=250 ){
//         $('.header-main').css('height',100);
//     }else if(a>250){
//         $('.header-main').css('height',200);
//     }
// });

$('#sidebar').hide();

function sideOpen() {
    $('#arrow-right').hide();
    $('#sidebar').addClass('animated fadeInLeft');
    $('#sidebar').show();
  }
function sideClose() {
    $('#arrow-right').show();
    $('#sidebar').hide();
  }

  $('.owl-top').owlCarousel({
    loop:true,
    items:4,
    autoplay:true,
    responsiveClass:true,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
        },
        1000:{
            items:4,
            // nav:true,
            loop:false
        }
    }
})
    $('.owl-flash').owlCarousel({
    loop:true,
    items:1,
    responsiveClass:true,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
            // nav:true,
            loop:false
        }
    }
})
    $('.owl-bg').owlCarousel({
    loop:true,
    items:1,
    responsiveClass:true,
    autoplayHoverPause:true,
    margin:false
})



