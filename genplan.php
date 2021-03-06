<?

$useragent=$_SERVER['HTTP_USER_AGENT'];
$mobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)));

?>
<!DOCTYPE html>
<html>
<head>
	<title>Проект</title>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <? if( $mobile ): ?>
	<meta name="viewport" content="width=750, user-scalable=no">
	<? endif; ?>

	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">

	<link rel="stylesheet" media="screen and (min-width: 240px) and (max-width: 767px)" href="css/layout-mobile.css" />
	<link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1024px)" href="css/layout-tablet.css" />
	<link rel="stylesheet" media="screen and (min-width: 1025px)" href="css/layout-desktop.css" />
	

	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
	
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/markerwithlabel.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/datepicker-ru.js"></script>
	<script type="text/javascript" src="js/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/KitProgress.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/device.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body>
	<!-- <ul class="ps-lines">
		<li class="v" style="margin-left:-501px"></li>
		<li class="v" style="margin-left:500px"></li>
		<li class="v" ></li>
	</ul> -->
	<div class="b-overlay"></div>
	<div class="b-mobile-menu-cont">
		<ul class="b-mobile-menu">
			<li><a href="#">генплан</a></li>
			<li><a href="#">таунхаусы</a></li>
			<li><a href="#">инфраструктура</a></li>
			<li><a href="#">акции</a></li>
			<li><a href="#">проект</a></li>
			<li><a href="#">контакты</a></li>
		</ul>
	</div>
	<div class="b-header-cont">
		<div class="b b-header">
			<div class="b-block clearfix">
				<a class="b-logo left" href="#">
					<img class="left" src="i/logo.png">
					<h3 class="bold left">Таунхаусы<br>в академгородке</h3>
				</a>
				<ul class="b-menu right clearfix">
					<li><a href="#">генплан</a></li>
					<li><a href="#">таунхаусы</a></li>
					<li><a href="#">инфраструктура</a></li>
					<li><a href="#">акции</a></li>
					<li><a href="#">проект</a></li>
					<li><a href="#">контакты</a></li>
				</ul>
				<a href="#" class="b-mobile-nav right"></a>
			</div>
		</div>
	</div>
	<div class="b-content">
		<div class="b-genplan">
			<div class="b-block">
				<img class="back" src="i/genplan.jpg">
				<img class="numbers one fancy" data-block="#b-popup-one" src="i/1.png">
				<img class="numbers one-a" src="i/1a.png">
				<img class="numbers two" src="i/2.png">
				<img class="numbers three" src="i/3.png">
				<img class="numbers four" src="i/4.png">
				<img class="numbers four-a" src="i/4a.png">
				<img class="numbers five" src="i/5.png">

				<!-- 1 -->

				<div data-id="1" class="point" style="top: 43.2360%; left: 27.1106%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="8" class="point" style="top: 41.9326%; left: 22.125%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="9" class="point" style="top: 41.3759%; left: 19.5544%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="10" class="point" style="top: 40.1050%; left: 14.5544%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="16" class="point" style="top: 39.4528%; left: 11.8625%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="17" class="point" style="top: 47.1532%; left: 8.7919%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="11" class="point" style="top: 47.6098%; left: 11.1894%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="12" class="point" style="top: 48.9807%; left: 16.4893%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="14" class="point" style="top: 49.6330%; left: 18.9813%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="15" class="point" style="top: 50.7890%; left: 24.2213%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>

				<!-- 1a -->

				<div data-id="18" class="point" style="top: 47.4393%; left: 44.6588%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="19" class="point" style="top: 46.8593%; left: 42.2975%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="20" class="point" style="top: 45.6522%; left: 37%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="21" class="point" style="top: 45.01%; left: 34.5%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="22" class="point" style="top: 43.7582%; left: 29.3125%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="23" class="point" style="top: 51.5617%; left: 26.5625%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="24" class="point" style="top: 52.5453%; left: 31.93%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="25" class="point" style="top: 53.2958%; left: 34.3675%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="26" class="point" style="top: 54.6445%; left: 39.9925%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="27" class="point" style="top: 55.2225%; left: 42.43%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>

				<!-- 2 -->

				<div data-id="28" class="point" style="top: 55.8459%; left: 58.68%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="29" class="point" style="top: 56.2225%; left: 62.18%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="30" class="point" style="top: 56.4037%; left: 66.4375%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="31" class="point" style="top: 56.789%; left: 70.6575%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="32" class="point" style="top: 56.9615%; left: 74.985%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="33" class="point" style="top: 57.2726%; left: 79.25%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="34" class="point" style="top: 57.5617%; left: 83.5625%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="35" class="point" style="top: 57.7563%; left: 87.125%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>

				<!-- 3 -->
				
				<div data-id="36" class="point" style="top: 41.28%; left: 86.75%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="37" class="point" style="top: 40.8794%; left: 80.7125%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="38" class="point" style="top: 40.782%; left: 78.7913%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="39" class="point" style="top: 40.3%; left: 72.7413%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="40" class="point" style="top: 40.2254%; left: 71.0038%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="41" class="point" style="top: 39.7%; left: 64.945%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="42" class="point" style="top: 39.629%; left: 63.1575%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="43" class="point" style="top: 39.1545%; left: 57.2075%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				
				<!-- 4 -->

				<div data-id="61" class="point" style="top: 20.01%; left: 32.875%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="62" class="point" style="top: 20.01%; left: 26.7269%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="63" class="point" style="top: 30.2505%; left: 25.8681%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="64" class="point" style="top: 27.5732%; left: 26.8519%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="65" class="point" style="top: 25.7428%; left: 30.7731%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>

				<!-- 4a -->

				<div data-id="51" class="point" style="top: 23.038%; left: 48.595%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="52" class="point" style="top: 22.5838%; left: 46.5325%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="53" class="point" style="top: 21.552%; left: 41.7825%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="54" class="point" style="top: 21.1667%; left: 39.7975%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="55" class="point" style="top: 20.3198%; left: 35.095%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="56" class="point" style="top: 26.2929%; left: 32.9075%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="57" class="point" style="top: 27.3526%; left: 37.7825%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="58" class="point" style="top: 27.6696%; left: 39.86%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="59" class="point" style="top: 28.8256%; left: 44.8125%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="60" class="point" style="top: 29.3073%; left: 46.9375%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
					
				<!-- 5 -->

				<div data-id="44" class="point" style="top: 15.5308%; left: 59.8125%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="45" class="point" style="top: 16.5906%; left: 63.8125%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="48" class="point" style="top: 17.3613%; left: 66.5625%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="49" class="point" style="top: 19.6734%; left: 69.4375%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="46" class="point" style="top: 22.2746%; left: 71.25%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="47" class="point" style="top: 25.0684%; left: 73.0625%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>
				<div data-id="50" class="point" style="top: 27.4769%; left: 74.625%;">
					<span class="plan-point"></span>
					<span class="plan-line"></span>
					<div class="plan-popup clearfix"></div>
				</div>

			</div>
		</div>
		<ul id="genplan-popups" class="b-genplan-popups" style="display:none;">
			<li data-id="1">
				<div class="clearfix">
					<h3 class="left">Квартира №8</h3>
					<h4 class="right">Свободна</h4>
				</div>
				<h2>2349 тыс. руб</h2>
				<div class="top-board clearfix">
					<div class="first">
						<h5>Коттедж</h5>
						<h6>4C</h6>
					</div>
					<div>
						<h5>Этажей</h5>
						<h6>3</h6>
					</div>
					<div class="last">
						<h5>Ориентация</h5>
						<h6>4C</h6>
					</div>
				</div>
				<div class="bot-board clearfix">
					<div class="first">
						<h5>общая площадь</h5>
						<h6>146,2 м<sup>2</sup></h6>
					</div>
					<div class="last">
						<h5>площадь гаража</h5>
						<h6>146,2 м<sup>2</sup></h6>
					</div>
				</div>
				<a href="#">Подробнее</a>
			</li>
			<li class="b-house">
				<h2>Таунхаус 1</h2>
			</li>
			<li data-id="1">
				<div class="clearfix">
					<h3 class="left">Квартира №8</h3>
					<h4 class="right">Свободна</h4>
				</div>
				<h2>2349 тыс. руб</h2>
				<div class="top-board clearfix">
					<div class="first">
						<h5>Коттедж</h5>
						<h6>4C</h6>
					</div>
					<div>
						<h5>Этажей</h5>
						<h6>3</h6>
					</div>
					<div class="last">
						<h5>Ориентация</h5>
						<h6>4C</h6>
					</div>
				</div>
				<div class="bot-board clearfix">
					<div class="first">
						<h5>общая площадь</h5>
						<h6>146,2 м<sup>2</sup></h6>
					</div>
					<div class="last">
						<h5>площадь гаража</h5>
						<h6>146,2 м<sup>2</sup></h6>
					</div>
				</div>
				<a href="#">Подробнее</a>
			</li>
			<li data-id="1">
				<div class="clearfix">
					<h3 class="left">Квартира №8</h3>
					<h4 class="right">Свободна</h4>
				</div>
				<h2>2349 тыс. руб</h2>
				<div class="top-board clearfix">
					<div class="first">
						<h5>Коттедж</h5>
						<h6>4C</h6>
					</div>
					<div>
						<h5>Этажей</h5>
						<h6>3</h6>
					</div>
					<div class="last">
						<h5>Ориентация</h5>
						<h6>4C</h6>
					</div>
				</div>
				<div class="bot-board clearfix">
					<div class="first">
						<h5>общая площадь</h5>
						<h6>146,2 м<sup>2</sup></h6>
					</div>
					<div class="last">
						<h5>площадь гаража</h5>
						<h6>146,2 м<sup>2</sup></h6>
					</div>
				</div>
				<a href="#">Подробнее</a>
			</li>
		</ul>
	</div>
	<div class="b b-footer clearfix">
		<a href="#" class="fancy" data-block="#b-popup-callback">Обратная<br>связь</a>
		<a href="#">Индивидуальная<br>планировка</a>
		<a href="#" class="fancy" data-block="#b-popup-order">Записаться<br>на просмотр</a>
	</div>

<div style="display:none;">
	<div id="b-popup-callback">
		<div class="for_all b-popup">
			<h2>Обратная связь</h2>
			<form action="kitsend.php" method="POST" id="b-form-1" data-block="#b-popup-2">
				<div class="b-popup-form">
					<div class="input-cont clearfix">
						<label for="name">Как к вам обращаться?</label>
						<input type="text" id="name" name="name" required/>
					</div>
					<div class="input-cont clearfix">
						<label for="tel">Номер телефона</label>
						<input type="text" id="tel" name="phone" required/>
					</div>
					<div class="input-cont clearfix">
						<label for="email">Ваша почта</label>
						<input type="text" id="email" name="email"/>
					</div>
					<div class="input-cont clearfix">
						<label for="question">Ваш вопрос</label>
						<textarea type="text" id="question" name="1"></textarea>
						<input type="hidden" name="1-name" value="Вопрос"/>
					</div>
					<div class="input-cont radio clearfix">
						<input type="checkbox" id="radio-callback" name="callback">
						<label class="right" for="radio-callback">
	                		<span class="checked"></span>  
	                		<h5>Заказать обратный звонок</h5>
	            		</label>
            		</div>
					<div class="input-cont clearfix" id="callback-time">
						<label>Выбрать время</label>
						<ul class="right radio">
							<li>
								<input type="radio" id="radio11" name="callback-time">
	                    		<label for="radio11">
	                        		<span class="checked"></span>  
	                        		<h5>с 9 до 12</h5>
	                    		</label>
							</li>
							<li>
								<input type="radio" id="radio22" name="callback-time">
	                    		<label for="radio22">
	                        		<span class="checked"></span>  
	                        		<h5>с 12 до 15</h5>
	                    		</label>
							</li>
							<li>
								<input type="radio" id="radio33" name="callback-time">
	                    		<label for="radio33">
	                        		<span class="checked"></span>  
	                        		<h5>с 15 до 18</h5>
	                    		</label>
							</li>
						</ul>
					</div>
					<input type="hidden" name="subject" value="Обратная связь"/>
					<input type="submit" class="ajax b-orange-butt" value="Отправить">
				</div>
			</form>
		</div>
	</div>
	<div id="b-popup-one">
		<div class="for_all b-popup">
			<div class="b-text">
				<h2>Один</h2>
				<p>Таунхаус в Академгородке — это жилой кирпичный дом европейского типа, разделенный на несколько просторных квартир, с индивидуальным входом и гаражом, обладающий высоким комфортом проживания, удобным расположением в городском районе с развитой инфраструктурой, великолепной транспортной доступностью и экологически благоприятным климатом.</p>
				<ul>
					<li>Высокий уровень комфорта и качества жизни</li>
					<li>Минимальное количество соседей</li>
					<li>Отдельный вход и земельный участок.</li>
					<li>Собственный гараж на 1 или 2 автомобиля</li>
					<li>Индивидуальная парковка для автомобилей перед домом.</li>
					<li>Придомовой участок, терраса.</li>
					<li>Центральное городское водоснабжение, канализация и электроэнергия.</li>
					<li>Автономное отопление и горячее водоснабжение на природном газе.  </li>
					<li>Современные энергосберегающие технологии строительства </li>
					<li>Свободная планировка</li>
					<li>Дизайн-проект</li>
				</ul>
				<h3>Заголовок</h3>
				<p>Таунхаус в Академгородке — это жилой кирпичный дом европейского типа, разделенный на несколько просторных квартир, с индивидуальным входом и гаражом, обладающий высоким комфортом проживания, удобным расположением в городском районе с развитой инфраструктурой, великолепной транспортной доступностью и экологически благоприятным климатом.</p>
			</div>
		</div>
	</div>
	<div id="b-popup-order">
		<div class="for_all b-popup">
			<h2>Записаться на просмотр</h2>
			<form action="kitsend.php" method="POST" id="b-form-1" data-block="#b-popup-2">
				<div class="b-popup-form">
					<div class="input-cont clearfix">
						<label for="name2">Как к вам обращаться?</label>
						<input type="text" id="name2" name="name" required/>
					</div>
					<div class="input-cont clearfix">
						<label for="tel2">Номер телефона</label>
						<input type="text" id="tel2" name="phone" required/>
					</div>
					<div class="input-cont clearfix">
						<label for="datepicker">Выберите дату</label>
						<input type="text" name="1" id="datepicker"/>
						<input type="hidden" name="1-name" value="Дата"/>
					</div>
					<div class="input-cont clearfix">
						<label>Выбрать время</label>
						<ul class="right radio">
							<li>
								<input type="radio" id="radio1" name="time">
	                    		<label for="radio1">
	                        		<span class="checked"></span>  
	                        		<h5>с 9 до 12</h5>
	                    		</label>
							</li>
							<li>
								<input type="radio" id="radio2" name="time">
	                    		<label for="radio2">
	                        		<span class="checked"></span>  
	                        		<h5>с 12 до 15</h5>
	                    		</label>
							</li>
							<li>
								<input type="radio" id="radio3" name="time">
	                    		<label for="radio3">
	                        		<span class="checked"></span>  
	                        		<h5>с 15 до 18</h5>
	                    		</label>
							</li>
						</ul>
					</div>
					<input type="hidden" name="subject" value="Обратная связь"/>
					<input type="submit" class="ajax b-orange-butt" value="Отправить">
				</div>
			</form>
		</div>
	</div>
	<div id="b-popup-2">
		<div class="b-thanks b-popup">
			<h3>Спасибо!</h3>
			<h4>Ваша заявка успешно отправлена.<br/>Наш менеджер свяжется с Вами в течение часа.</h4>
			<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
		</div>
	</div>
	<div id="b-popup-error">
		<div class="b-thanks b-popup">
			<h3>Ошибка отправки!</h3>
			<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
			<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
		</div>
	</div>
</div>
</body>
</html>