// *****************************************************
                    //CONTACT
// *****************************************************
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
// *****************************************************
                    //NAV
// *****************************************************
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
// *****************************************************
                    //GEOLOCALISATION
// *****************************************************

//Variables globales
var theLatitude = 50.47094456845385;
var theLongitude = 4.468710422515869;
var latMax = 50.4788000;
var latMin = 50.467847;
var longMax = 4.483307;
var longMin = 4.461093;


function Geolocalisation() {
  var optionsGeo = {
    enableHighAccuracy: true,
    timeout: 12000, //Durée avant affichage d'erreur
    maximumAge: 600 //Durée de mise en cache de la position
  }
  navigator.geolocation.watchPosition(successGeo, errorGeo, optionsGeo);
}

function successGeo(pos) {
  crd = pos.coords;
  console.log("Latitude : "+crd.latitude)
  console.log("Longitude : "+crd.longitude)
  posLong = crd.longitude;
  posLat = crd.latitude;

  //Préciser Géo
  if (posLat > latMax || posLat < latMin || posLong > longMax || posLong < longMin) {
    CalculCoordo(theLongitude, theLatitude, $('#pointer'));
  }
  else {
    CalculCoordo(posLong, posLat, $('#pointer'));
  }
}

function errorGeo(e) {
  console.log(e);
}

function animaux() {
  $('.animal-icon').each(function(){
    long = $(this).attr('data-long');
    lat = $(this).attr('data-lat');
    CalculCoordo(long, lat, $(this));
  })
}

function CalculCoordo (long, lat, el){
  ratio_long = longMax - longMin;
  posLong =  ((long - longMin)/ratio_long)*100 + "%";
  ratio_lat = latMax - latMin;
  posLat =  ((latMax - lat)/ratio_lat)*100 + "%";
  el.css({"top": posLat, "left": posLong});
}

Geolocalisation();
animaux();

/******************************************************************************/
//Animal
$('#liste').on('change', function(){
  Val = $(this).val();

  $(".animal-icon").each(function(){
    if($(this).attr("data-animal") == Val) {
      $(this).addClass("active");
    }
    else {
      $(this).removeClass("active");
    }
  })

})


    