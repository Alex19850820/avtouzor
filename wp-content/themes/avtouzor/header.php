<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avtouzor
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header class="header" id="header"><img class="header__smoke" src="<?php bloginfo('template_url')?>/assets/images/smoke.png" alt="" role="presentation"/>
			<div class="container">
				<div class="nav-menu"><img class="nav-menu__logo" src="<?php bloginfo('template_url')?>/assets/images/logo.png" width="auto" height="124" alt="" role="presentation"/>
					<ul class="menu-item">
						<li class="item"><a class="menu-item-a scroll" href="#services">услуги</a>
						</li>
						<li class="item"><a class="menu-item-a scroll" href="#work">галерея</a>
						</li>
						<li class="item"><a class="menu-item-a scroll" href="#footer">контакты</a>
						</li>
					</ul>
					<div class="mail-phone">
						<div class="mail">
							<div class="mail-phone-image"><i class="fas fa-at"></i>
							</div><a class="mail__email" href="mailto:info@avtouzor.ru">info@avtouzor.ru</a>
						</div>
						<div class="phone">
							<div class="mail-phone-image"><i class="fas fa-phone"></i>
							</div>
							<div class="phone-block">
								<p class="phone-block__nphone">8 (812) 319 36 02
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="banner">
					<div class="banner-text">
						<h2>Оклейка автомобилей
						</h2>
						<h2>виниловой пленкой
						</h2>
						<p>Компания "Автоузор" является одним из лидеров рынка винилового стайлинга автомобилей и рекламы на транспорте в Санкт-Петербурге.
						</p>
						<p>Профессиональный коллектив и собственная производственная база позволяет проводить работы «под ключ»: проект – согласование - изготовление - нанесение. Ну а если Вы не очень четко представляете себе новый внешний вид автомобиля, наш художник-дизайнер предложит Вам несколько эскизов с учетом требований и пожеланий.
						</p>
						<p>Закажите расчёт или консультацию по интересующему вас проекту
						</p>
						<div class="header-advice"><a class="advice js js_modalWindow" href="#modal" rel="nofollow">Получить консультацию</a>
						</div>
					</div>
					<div class="banner-image"><img class="banner-image__reg-dradon" src="<?php bloginfo('template_url')?>/assets/images/red-dragon.png" alt="" width="820px" role="presentation"/>
					</div>
				</div>
			</div>
		</header>
<!--<div id="content" class="site-content">-->