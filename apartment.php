<?

$useragent=$_SERVER['HTTP_USER_AGENT'];
$mobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

?>
<!DOCTYPE html>
<html>
<head>
	<title>Апартаменты</title>
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
	<link rel="stylesheet" href="css/slick.css" type="text/css">
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
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/KitProgress.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/device.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body>
	<ul class="ps-lines">
		<li class="v" style="margin-left:-501px"></li>
		<li class="v" style="margin-left:500px"></li>
		<li class="v" ></li>
	</ul>
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
		<div class="b-apartment">
			<div class="b-block">
				<h2>Апартаменты</h2>
				<div class="apartment-cont clearfix">
					<img class="left bg-img" src="i/bg-img.jpg">
					<div class="right main-desc">
						<h3>ЦЕНА: 6 500 000 <span>&#8381;</span></h3>
						<ul class="clearfix">
							<li class="b-go" data-offset="50" data-block=".b-floor">
								<img src="i/floor2.jpg">
								<h4>первый этаж</h4>
							</li>
							<li class="b-go" data-offset="50" data-block=".b-floor">
								<img src="i/floor2.jpg">
								<h4>второй этаж</h4>
							</li>
							<li class="b-go" data-offset="50" data-block=".b-floor">
								<img src="i/floor3.jpg">
								<h4>третий этаж</h4>
							</li>
						</ul>
						<div class="clearfix board">
							<img class="left" src="i/board.jpg">
							<div class="right">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-desc">
			<div class="b-block">
				<div class="text-desc clearfix">
					<div class="left">
						<h2 class="title">Все коммуникации<br>городские</h2>
						<span class="line"></span>
						<ul class="features clearfix">
							<li>
								<div style="background-image: url('i/gas.png');"></div>
								<h5>магистральный<br>газ</h5>
							</li>
							<li>
								<div style="background-image: url('i/light.png');"></div>
								<h5>электричество</h5>
							</li>
							<li>
								<div style="background-image: url('i/water.png');"></div>
								<h5>водоснабжение</h5>
							</li>
							<li>
								<div style="background-image: url('i/valve.png');"></div>
								<h5>ЛУЖАЙКА НА ЗАДНЕМ ДВОРЕ</h5>
							</li>
							<li>
								<div style="background-image: url('i/fan.png');"></div>
								<h5>Центральная канализация</h5>
							</li>
							<li>
								<div style="background-image: url('i/wood.png');"></div>
								<h5>минимальная оплата за квартиру</h5>
							</li>
						</ul>
						<div class="b-text">
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
						</div>
					</div>
					<div class="right">
						<div class="spec">
							<h3>Технические характеристики</h3>
							<span class="line"></span>
							<h4>Коттедж: <span>4С</span></h4>
							<h4>Общая площадь: <span>147 м<sup>2</sup></span></h4>
							<h4>Площадь стояночого места: <span>35,28 м<sup>2</sup></span></h4>
							<h4>Площадь места для отдыха: <span>147 м<sup>2</sup></span></h4>
							<h4>Площадь лужайки за домом: <span>147 м<sup>2</sup></span></h4>
							<h4>Площадь мансарды: <span>147 м<sup>2</sup></span></h4>
							<h4>Площадь паркинга: <span>147 м<sup>2</sup></span></h4>
							<h4>Ориентация: <span>С/З</span></h4>
							<h4>Площадь гаража: <span>147 м<sup>2</sup></span></h4>
							<h4>Количество этажей: <span>3</span></h4>
						</div>
							<a href="#">Записаться<br>на просмотр</a>
					</div>
				</div>
				
			</div>
		</div>
		<div class="b-floor">
			<div class="b-block">
				<h2 class="title">Планировка этажей</h2>
				<span class="line"></span>
			</div>
			<ul class="clearfix">
				<li class="b-first-floor">
					<a class="fancy-img" href="#" data-block="#b-popup-gallery" data-slide="0" data-text="первый этаж">
						<img src="i/floor2.jpg">
						<h3>первый этаж</h3>
					</a>
				</li>
				<li class="b-second-floor">
					<a class="fancy-img" href="#" data-block="#b-popup-gallery" data-slide="1" data-text="второй этаж">
						<img src="i/floor2.jpg">
						<h3>второй этаж</h3>
					</a>
				</li>
				<li class="b-third-floor">
					<a class="fancy-img" href="#" data-block="#b-popup-gallery" data-slide="2" data-text="третий этаж">
						<img src="i/floor3.jpg">
						<h3>третий этаж</h3>
					</a>
				</li>
			</ul>
		</div>
		<div class="order-plan-slider">
			<div class="b-order-plan">
				<div class="b-block">
					<h3>Есть возможность заказать проект под индивидуальную<br>планировку</h3>
				</div>
			</div>
			<div class="b-order-plan">
				<div class="b-block">
					<h3>Есть возможность заказать проект под индивидуальную<br>планировку</h3>
				</div>
			</div>
		</div>
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
					<input type="hidden" name="subject" value="Обратная связь"/>
					<input type="submit" class="ajax b-orange-butt" value="Отправить">
				</div>
			</form>
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
	<div id="b-popup-gallery">
		<div class="for_all b-popup-gallery">
			<h3>Первый этаж</h3>
			<div class="popup-gallery">
				<div style="background-image: url('i/floor1.jpg');" class="gallery-img">первый этаж</div>
				<div style="background-image: url('i/floor2.jpg');" class="gallery-img">второй этаж</div>
				<div style="background-image: url('i/floor3.jpg');" class="gallery-img">третий этаж</div>
			</div>
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