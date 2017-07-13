$(document).ready(function() {


//scroll elem
$('.go-to').click( function(){
    var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
        $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 900);
        }
        return false;
    });



//slider gullery
$('.confidence-slider').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 5,
      dots: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
          slidesToShow: 4,
          //dots: false,
          //autoplay: true
          }
        },
        {
          breakpoint: 769,
          settings: {
          slidesToShow: 4,
          slidesToScroll: 2,
          dots: true,
          autoplay: true
          }
        },
        {
          breakpoint: 667,
          settings: {
          slidesToShow: 3,
          slidesToScroll: 5,
          dots: true,
          autoplay: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
    

    $('.results-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 3000,
      fade: true,
      //cssEase: 'linear',
      responsive: [
        {
          breakpoint: 667,
          settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
    $('.results-slider .slick-next').html('<i class="ion-ios-arrow-right"></i>');
    $('.results-slider .slick-prev').html('<i class="ion-ios-arrow-left"></i>');






//form
$(".my-form").validate({
  rules: {
    userTel: {
      required: true
    },
    userEmail: {
      required: true,
      email: true
    }
  },
   messages: {
      userTel: {
         required: ""
      },
      userEmail: {
         required: ""
      }
   }
});
$(".booking-form").validate({
  rules: {
    userTel: {
      required: true
    },
    userEmail: {
      required: true,
      email: true
    }
  },
   messages: {
      userTel: {
         required: ""
      },
      userEmail: {
         required: ""
      }
   }
});
$(".booking-form2").validate({
  rules: {
    userTel: {
      required: true
    },
    userEmail: {
      required: true,
      email: true
    }
  },
   messages: {
      userTel: {
         required: ""
      },
      userEmail: {
         required: ""
      }
   }
});
$(".favorit-form").validate({
  rules: {
    userTel: {
      required: true
    },
    userEmail: {
      required: true,
      email: true
    }
  },
   messages: {
      userTel: {
         required: ""
      },
      userEmail: {
         required: ""
      }
   }
});
$(".modalform").validate({
  rules: {
    userTel: {
      required: true
    },
    userEmail: {
      required: true,
      email: true
    }
  },
   messages: {
      userTel: {
         required: ""
      },
      userEmail: {
         required: ""
      }
   }
});
$(".modalform2").validate({
  rules: {
    userTel: {
      required: true
    },
    userEmail: {
      required: true,
      email: true
    }
  },
   messages: {
      userTel: {
         required: ""
      },
      userEmail: {
         required: ""
      }
   }
});






//musk
$(".mask").mask("(999) 999-9999");















});