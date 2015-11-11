$(document).ready(function(){	
    var myWidth,myHeight;
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
        var contentHeight = myHeight-$(".b-footer").height()-$(".b-header-cont").height();
        $(".b-content").css("min-height",contentHeight);
        $(".b-contacts-map").css("height",contentHeight-$(".b-contacts").height());
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
        var image = '/bitrix/templates/main/i/map-marker.png';
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


    // if( $('#fullpage').length && !device.mobile() )
    //     $('#fullpage').fullpage({
    //         sectionSelector: '.b-inf',
    //         verticalCentered: true,
    //         paddingTop: '79px'
    //     });

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

    if( $(".b-townhouse").length ){
        checkHash();

        function range_init() {
            $.each($(".slider-range"),function(){
                var obj = $(this),
                data_step = $(this).attr("data-step") ? $(this).attr("data-step")*1 : 1,
                min_input = $(this).siblings(".min-val"),
                max_input = $(this).siblings(".max-val"),
                min_val = Math.floor($(this).attr("data-min")*1/data_step)*data_step,
                max_val = Math.ceil($(this).attr("data-max")*1/data_step)*data_step,
                cur_min_val = $(this).attr("data-min-cur") ? $(this).attr("data-min-cur")*1 : min_val,
                cur_max_val = $(this).attr("data-max-cur") ? $(this).attr("data-max-cur")*1 : max_val;
                if( cur_min_val == $(this).attr("data-min") ) cur_min_val = min_val;
                if( cur_max_val == $(this).attr("data-max") ) cur_max_val = max_val;
                obj.slider({
                    step: data_step,
                    range: true,
                    min: min_val,
                    max: max_val,
                    values: [ cur_min_val, cur_max_val ],
                    slide: function( event, ui ) {
                        (ui.values[ 0 ] == min_val) ? min_input.val('') : min_input.val( ui.values[ 0 ] );
                        (ui.values[ 1 ] == max_val) ? max_input.val('') : max_input.val( ui.values[ 1 ] );  

                    },
                    change: function( event, ui ) {  
                        (ui.values[ 0 ] == min_val) ? min_input.val('') : min_input.val( ui.values[ 0 ] );
                        (ui.values[ 1 ] == max_val) ? max_input.val('') : max_input.val( ui.values[ 1 ] );  
                        filter();     
                    }
                });
                (cur_min_val == min_val) ? min_input.val('') : min_input.val( cur_min_val );
                (cur_max_val == max_val) ? max_input.val('') : max_input.val( cur_max_val );

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
        range_init();

        function filter(){
            var price = {
                min: ($(".price.min-val").val())?$(".price.min-val").val()*1:$(".price-slider").attr("data-min")*1,
                max: ($(".price.max-val").val())?$(".price.max-val").val()*1:$(".price-slider").attr("data-max")*1
            },
            square = {
                min: ($(".square.min-val").val())?$(".square.min-val").val()*1:$(".square-slider").attr("data-min")*1,
                max: ($(".square.max-val").val())?$(".square.max-val").val()*1:$(".square-slider").attr("data-max")*1
            },
            hash = "square="+square.min+"-"+square.max+"&price="+price.min+"-"+price.max,
            count = 0;

            $(".b-apartments li").hide().removeClass("active");
            $(".b-apartments li").each(function(){
                var el = {
                    price : $(this).attr("data-price")*1,
                    square : $(this).attr("data-square")*1
                };

                if( el.price >= price.min && el.price <= price.max && el.square >= square.min && el.square <= square.max ){
                    $(this).fadeIn(300).addClass("active");
                    count++;
                }
            });

            $(".b-house").hide();

            $(".b-apartments li.active").parents(".b-house").show();

            $(".count-filter").text(declOfNum(count,["Вариант","Варианта","Вариантов"]));

            checkFilter();

            calcNumbers();

            window.location.hash = hash;
        }

        checkFilter();

        filter();

        function calcNumbers(){
            // $(".b-house").each(function(){
            //     var i = 1;
            //     $(this).find("li.active").each(function(){
            //         $(this).find(".number").text(i);
            //         i++;
            //     });
            // });
        }

        function checkHash(){
            if( window.location.hash != "" ){
                var hash = window.location.hash.split("&"),
                    square = hash[0].slice(hash[0].indexOf("=")+1,hash[0].length).split("-"),
                    price = hash[1].slice(hash[1].indexOf("=")+1,hash[1].length).split("-");

                $(".price-slider").attr("data-min-cur",price[0]).attr("data-max-cur",price[1]);
                $(".square-slider").attr("data-min-cur",square[0]).attr("data-max-cur",square[1]);
            }
        }

        function checkFilter(){
            var check = false;
            $(".min-val,.max-val").each(function(){
                if( $(this).val() != "" ) check = true;
            });

            if( check ){
                $(".clear-filter").fadeIn(300);
            }else{
                $(".clear-filter").fadeOut(300);
            }
        }

        function declOfNum(number, titles){
            var cases = [2, 0, 1, 1, 1, 2];
            return number+" "+titles[ (number%100 > 4 && number %100 < 20) ? 2 : cases[(number%10 < 5)?number%10:5] ];
        }

        $(".clear-filter").click(function(){
            $(".min-val,.max-val").each(function(){
                $(this).val("").trigger("change"); 
            });
            $(".b-apartments li").stop().fadeIn(300);
            return false;
        });
    }
        var animate = true;
        $(".plan-point").click(function(){
            if(animate) {
                animate = false;
                var point = $(this);
                var active =  $(".point.active");        
                if(!point.parent().hasClass("active")) {
                    if(point.parent().offset().left < 175) {
                        var left = 175 - point.parent().offset().left;
                        point.siblings(".plan-popup").css( "left", "+="+left );
                    }
                    if(point.parent().offset().left > (myWidth-220) )  {
                        var left = 220 - (myWidth - point.parent().offset().left);
                        point.siblings(".plan-popup").css( "left", "-="+left );
                    }
                    if( (myHeight + $(".b-header").offset().top - point.parent().offset().top) < 455 ) { 
                        var top = 455 - (myHeight - point.parent().offset().top);
                        $("body, html").animate({
                            scrollTop : top
                        },800); 
                    }
                    point.parent().addClass("active");
                    point.siblings(".plan-line").slideDown(200,function(){
                        point.siblings(".plan-popup").slideDown(400,function(){
                            animate = true;
                        });
                    });
                }
                closeBubble(active);
            }
        });

        setTimeout(function(){
            if( $(".plan-point").length ) $(".plan-point").eq(0).click();
        },1000);

        function closeBubble(active){
            if( typeof active == "undefined" ) active = $(".point.active");
                active.removeClass('active');
                active.find('.plan-line').fadeOut(400);
                active.find('.plan-popup').fadeOut(400,function(){
                    active.find('.plan-popup').css( "left", "-165px" );
                    animate = true;
                });
        }

        $("body").on("mouseup",".plan-popup,.plan-point",function(){
            open = true;
        });

        $("body").on("mousedown",function() {
            open = false;
        }).bind("mouseup",function(){
            if( !open )
                closeBubble();
        });

    $("#genplan-popups li").each(function(){
        var id = $(this).attr("data-id");
        $(".point[data-id='"+id+"'] .plan-popup").append($(this).html());
    });
    // $("#genplan-popups").remove();
});