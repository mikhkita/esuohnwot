function getNextField($form){
	var j = 1;
	while( $form.find("input[name="+j+"]").length ){
		j++;
	}
	return j;
}

var customHandlers = [];

$(document).ready(function(){	
	var rePhone = /^\+\d \(\d{3}\) \d{3}-\d{2}-\d{2}$/,
		tePhone = '+7 (999) 999-99-99';

	$.validator.addMethod('customPhone', function (value) {
		return rePhone.test(value);
	});

	$(".ajax").parents("form").each(function(){
		$(this).validate({
			rules: {
				email: 'email',
				phone: 'customPhone'
			}
		});
		if( $(this).find("input[name=phone]").length ){
			$(this).find("input[name=phone]").mask(tePhone,{placeholder:"_"});
		}
	});

	function whenScroll(){
		var scroll = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
		if( customHandlers["onScroll"] ){
			customHandlers["onScroll"](scroll);
		}
	}
	$(window).scroll(whenScroll);
	whenScroll();

	$(".fancy").each(function(){
		var $popup = $($(this).attr("data-block")),
			$this = $(this);
		$this.fancybox({
			padding : 0,
			content : $popup,
			fitToView: false,
			helpers: {
	         	overlay: {
	            	locked: true,
	            	css : {
		                'background' : 'rgba(237,234,229,0.95)'
		            }
	         	}
	      	},
	      	tpl: {
	      		closeBtn : '<a title="Close" class="fancybox-item fancybox-close popup-close" href="javascript:;"></a>'
	      	},
			
			beforeShow: function(){
				if($this.attr("data-block") == "#b-popup-gallery") {
					$(window).resize();
					$(".popup-gallery:visible").slick('slickGoTo',$this.attr("data-slide"),true);  	      
					$(".popup-gallery:visible").slick('setPosition');		
					$(".b-popup-gallery").find("h3").text($this.attr("data-text"));
				}
				$popup.find(".custom-field").remove();
				if( $this.attr("data-value") ){
					var name = getNextField($popup.find("form"));
					$popup.find("form").append("<input type='hidden' class='custom-field' name='"+name+"' value='"+$this.attr("data-value")+"'/><input type='hidden' class='custom-field' name='"+name+"-name' value='"+$this.attr("data-name")+"'/>");
				}
				if( $this.attr("data-beforeShow") && customHandlers[$this.attr("data-beforeShow")] ){
					customHandlers[$this.attr("data-beforeShow")]($this);
				}
			},
			afterShow: function(){
				if( $this.attr("data-afterShow") && customHandlers[$this.attr("data-afterShow")] ){
					customHandlers[$this.attr("data-afterShow")]($this);
				}
			},
			beforeClose: function(){
				if( $this.attr("data-beforeClose") && customHandlers[$this.attr("data-beforeClose")] ){
					customHandlers[$this.attr("data-beforeClose")]($this);
				}
			},
			afterClose: function(){
				if( $this.attr("data-afterClose") && customHandlers[$this.attr("data-afterClose")] ){
					customHandlers[$this.attr("data-afterClose")]($this);
				}
			}
		});
	});

	$(".b-go").click(function(){
		var block = $( $(this).attr("data-block") ),
			off = $(this).attr("data-offset")||0;
		$("body, html").animate({
			scrollTop : block.offset().top-off
		},800);
		return false;
	});

	$(".fancy-img").each(function(){
		var $popup = $($(this).attr("data-block")),
			$this = $(this);
		$this.fancybox({
			padding : 0,
			content : $popup,
			fitToView: false,
			helpers: {
	         	overlay: {
	            	locked: true,
	            	css : {
		                'background' : 'rgba(237,234,229,0.95)'
		            }
	         	}
	      	},
			beforeLoad: function() {
				if($this.attr("data-block") == "#b-popup-inf-photo") {
					var imgs = $this.attr("data-imgs").split(',');
					$("#b-popup-inf-photo .popup-gallery").empty();
					$(imgs).each(function(index, value){
						$("#b-popup-inf-photo .popup-gallery").append('<div style="background-image: url('+value+');" class="gallery-img"></div>');
					});
				}	
				$(".popup-gallery").slick({
		            infinite: false,
		            draggable: false,
		            autoplay: false,
		            slidesToShow: 1,
		            slidesToScroll: 1,
		            prevArrow: "<span class='arrow popup-left-arrow'></span>",
		            nextArrow: "<span class='arrow popup-right-arrow'></span>"
		        });		
			},
			beforeShow: function(){
				$(window).resize();
				$(".popup-gallery:visible").slick('setPosition');
				if($this.attr("data-block") == "#b-popup-gallery") {
					$(".popup-gallery:visible").slick('slickGoTo',$this.attr("data-slide"),true);  	      
					$(".b-popup-gallery").find("h3").text($this.attr("data-text"));
				}
			},
			afterClose: function() {
				$(".popup-gallery").slick('unslick');
			}
		});
	});

	$(".ajax").parents("form").submit(function(){
  		if( $(this).find("input.error,select.error,textarea.error").length == 0 ){
  			var $this = $(this),
  				$thanks = $($this.attr("data-block"));

  			if( $this.attr("data-beforeAjax") && customHandlers[$this.attr("data-beforeAjax")] ){
				customHandlers[$this.attr("data-beforeAjax")]($this);
			}

  			$.ajax({
			  	type: $(this).attr("method"),
			  	url: $(this).attr("action"),
			  	data:  $this.serialize(),
				success: function(msg){
					var $form;
					if( msg == "1" ){
						$form = $thanks;
					}else{
						$form = $("#b-popup-error");
					}

					if( $this.attr("data-afterAjax") && customHandlers[$this.attr("data-afterAjax")] ){
						customHandlers[$this.attr("data-afterAjax")]($this);
					}

					$this.find("input[type=text],textarea").val("");
					$.fancybox.open({
						content : $form,
						padding : 0,
						helpers: {
				         	overlay: {
				            	locked: true,
				            	css : {
					                'background' : 'rgba(237,234,229,0.95)'
					            }
				         	}
				      	},
					});	
				}
			});
  		}
  		return false;
  	});
});