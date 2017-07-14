    //Toggle telephone
    $('#test5').on('change', function() {
      var tel = $('#icon_telephone');
      var isDisabled = tel.prop('disabled');

      if(isDisabled) {
        tel.prop('disabled', false);
        tel.val("");
      }
      else {
        tel.prop('disabled', true);
        tel.val("Non autorisé")
      }
    });

    // ANIMATION NAV
        (function($){
            $(document).ready(function(){
                var offset = $(".nav-princip").offset().top;
                $(document).scroll(function(){
                    var scrollTop = $(document).scrollTop();
                    if(scrollTop > offset){
                        $(".nav-princip").css("position", "fixed");
                        $(".nav-princip").css("top", "0");
                    }
                    else {
                        $(".nav-princip").css("position", "static");
                    }
                });
            });
        })(jQuery);

    // SCROLLING NAV
    $(document).ready(function() {
      $('nav a[href^="#"]').click(function() {
          var hash = $(this).attr('href');
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 1000);
            return false;
        });
    
    });
    


    