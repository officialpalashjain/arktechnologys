$(document).ready(function() {
	$('.select_account select').on('change', function(){
    var v = $(this).val();
    if(v == 'Account Open') {
      $('.aadhaar_card').show();
      $('.pan_card').show();
      $('.bank_account_statement').show();
    }
    else {
      $('.aadhaar_card').hide();
      $('.pan_card').hide();
      $('.bank_account_statement').hide();
    }
  })
}); 
	
	

$('.home_banner_slider').slick({
  dots: false,
  arrows: false,
  infinite: false,
  autoplay: true,
  fade: false,
  speed: 1000,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});



$('.our_work_slider_sec').slick({
  dots: false,
  arrows: false,
  infinite: true,
  autoplay: true,
  speed: 100,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


$('.testimonials_slider_sec').slick({
  dots: false,
  arrows: false,
  infinite: true,
  autoplay: true,
  speed: 100,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});