$(document).ready(function(){	
    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }
        $(".b-content").css("min-height",myHeight-$(".b-footer").height());
    }
    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
          $('[placeholder]').focus(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
              input.val('');
              input.removeClass('placeholder');
            }
          }).blur(function() {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
              input.addClass('placeholder');
              input.val(input.attr('placeholder'));
            }
          }).blur().parents('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
              var input = $(this);
              if (input.val() == input.attr('placeholder')) {
                input.val('');
              }
          })
        });
      }
    }
    $.fn.placeholder();
    
	var myPlace = new google.maps.LatLng(56.473918, 85.046380);
    var myOptions = {
        zoom: 17,
        center: myPlace,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,
        scrollwheel: false,
        zoomControl: true
    }
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 
    var image = 'i/map-marker.png';
    var marker = new MarkerWithLabel({
       position: myPlace,
       map: map,
       icon: image,
       labelContent: "ТАУНХАУСЫ В&nbsp;АКАДЕМГОРОДКЕ",
       labelAnchor: new google.maps.Point(-56, 113),
       labelClass: "map-marker",
       labelInBackground: false
     });

    $( "#datepicker" ).datepicker({
        minDate: 0,
        onClose: function() {
            $( "#datepicker" ).valid();
        }
    }).datepicker( $.datepicker.regional[ "ru" ] );

});