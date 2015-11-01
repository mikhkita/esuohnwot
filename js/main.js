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
        if( $(".b-popup-gallery:visible").length ) {
            $(".b-popup-gallery").css("width",(myWidth-100)+"px").css("height",(myHeight-100)+"px");
            $(".b-popup-gallery .gallery-img").css("height",(myHeight-260)+"px");
        }
        $(".b-content").css("min-height",myHeight-$(".b-footer").height()-$(".b-header-cont").height());

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
                });
            });
        }
    }
    $.fn.placeholder();
    if($("#map_canvas").length) {
        var styles = [
        {
            "stylers": [
                { lightness: -10 }
            ]
        }
    ]
        var styledMap = new google.maps.StyledMapType(styles,
            {name: "Styled Map"});
    	var myPlace = new google.maps.LatLng(56.472116, 85.060183);
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
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');
    }
    if($("#datepicker").length) {
        $( "#datepicker" ).datepicker({
            minDate: 0,
            onClose: function() {
                $( "#datepicker" ).valid();
            }
        }).datepicker( $.datepicker.regional[ "ru" ] );
    }

   

    $( ".b-mobile-nav" ).click(function() {
        if(!$( ".b-mobile-menu-cont" ).hasClass("active")) {
            openMenu();
        } else {        
            closeMenu();
        }
        return  false;
    });

    $(".b-overlay").click(closeMenu);

    function openMenu(){
        $(".b-overlay").fadeIn(300);
        $( "body" ).css("overflow","hidden");
        $( ".b-mobile-menu-cont" ).show().addClass("active");  
        TweenLite.to($( ".b-mobile-menu-cont" ), 0.3, { "right" : 0, ease : Quad.easeInOut } );
    }

    function closeMenu(){
        $(".b-overlay").fadeOut(300);
        $( "body" ).css("overflow","auto");
        $( ".b-mobile-menu-cont" ).removeClass("active");
        TweenLite.to($( ".b-mobile-menu-cont" ), 0.3, { "right" : -450, ease : Quad.easeInOut } );
    }


    if( $('#fullpage').length && !device.mobile() )
        $('#fullpage').fullpage({
            sectionSelector: '.b-inf',
            paddingTop: '79px'
        });

    $("#radio-callback").change(function(){
        if($(this).prop("checked")) {
            $("#callback-time").slideDown();
        } else $("#callback-time").slideUp();
    });
    
    $('#b-popup-gallery .popup-gallery').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $("#b-popup-gallery .b-popup-gallery h3").text($("#b-popup-gallery .b-popup-gallery .popup-gallery .gallery-img").eq(nextSlide).text());
    });

    if($(".order-plan-slider").length) {
        $(".order-plan-slider").slick({
            autoplay: true,
            infinite: true,
            prevArrow: "<span class='arrow order-left-arrow'></span>",
            nextArrow: "<span class='arrow order-right-arrow'></span>"
        });
    }

    function range_init() {
        $.each($(".slider-range"),function(){
            var obj = $(this),
            min_input = $(this).siblings(".min-val"),
            max_input = $(this).siblings(".max-val"),
            // min_text = $(this).closest(".slide-type").find(".min-text"),
            // max_text = $(this).closest(".slide-type").find(".max-text"),
            min_val = $(this).attr("data-min")*1,
            max_val = $(this).attr("data-max")*1,
            cur_min_val = $(this).attr("data-min-cur") ? $(this).attr("data-min-cur")*1 : min_val,
            cur_max_val = $(this).attr("data-max-cur") ? $(this).attr("data-max-cur")*1 : max_val,
            data_step = $(this).attr("data-step") ? $(this).attr("data-step")*1 : 1;
            obj.slider({
                step: data_step,
                range: true,
                min: min_val,
                max: max_val,
                values: [ cur_min_val, cur_max_val ],
                slide: function( event, ui ) {
                    (ui.values[ 0 ] == min_val) ? min_input.val('') : min_input.val( ui.values[ 0 ] );
                    (ui.values[ 1 ] == max_val) ? max_input.val('') : max_input.val( ui.values[ 1 ] );  
                    // min_text.text( ui.values[ 0 ] );
                    // max_text.text( ui.values[ 1 ] );

                },
                change: function( event, ui ) {  
                    (ui.values[ 0 ] == min_val) ? min_input.val('') : min_input.val( ui.values[ 0 ] );
                    (ui.values[ 1 ] == max_val) ? max_input.val('') : max_input.val( ui.values[ 1 ] );       
                    // min_text.text( ui.values[ 0 ] );
                    // max_text.text( ui.values[ 1 ] );
                }
            });
            (cur_min_val == min_val) ? min_input.val('') : min_input.val( cur_min_val );
            (cur_max_val == max_val) ? max_input.val('') : max_input.val( cur_max_val );
            // min_text.text( cur_min_val );
            // max_text.text( cur_max_val );

            min_input.change(function() {
            if($(this).val()=='' || (($(this).val()*1) <= min_val) )  {
                $(this).val('');
                obj.slider( "values", 0, min_val );
                return true;
            }
            if(max_input.val()=="" && (($(this).val()*1) > max_val) ) {
                $(this).val(max_val);
                obj.slider( "values", 0, max_val );
                return true;
            }
            if(max_input.val()!="" && (($(this).val()*1) > max_input.val()*1) ) {
                $(this).val(max_input.val());       
            }
            obj.slider( "values", 0, $(this).val()*1 );
            
            });
            max_input.change(function() {
                if($(this).val()=='' || (($(this).val()*1) >= max_val) ) {
                    $(this).val('');
                    obj.slider( "values", 1, max_val );
                    return true;
                }
                if(min_input.val()=="" && (($(this).val()*1) < min_val) ) {
                    $(this).val(min_val);
                    obj.slider( "values", 1, min_val );
                    return true;
                }
                if(min_input.val()!="" && (($(this).val()*1) < min_input.val()*1) ) {
                    $(this).val(min_input.val());    
                }
                obj.slider( "values", 1, $(this).val()*1 );
            });
        });
        
    }
    if ($(".slider-range").length) range_init();

});