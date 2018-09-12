<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avtouzor
 */

?>

<footer class="footer-section" id="footer">
	<div class="container">
		<div class="footer">
			<div class="contacts">
				<div class="flogo"><a class="flogo-src scroll" href="#header"><img class="flogo-src__flogo" src="<?php bloginfo('template_url')?>/assets/images/logo.png" width="auto" height="124" alt="" role="presentation"/></a>
					<ul class="fmenu-item">
						<li class="fitem"><a class="fmenu-item-a scroll" href="#services">Услуги</a>
						</li>
						<li class="fitem"><a class="fmenu-item-a scroll" href="#work">Галерея</a>
						</li>
						<li class="fitem"><a class="fmenu-item-a scroll" href="#footer">Контакты</a>
						</li>
					</ul>
				</div>
				<div class="social">
					<div class="fmail-fphone">
						<div class="flocation">
							<div class="fmail-phone-image"><i class="fas fa-map-marker-alt"></i>
							</div>
							<p class="flocation__location">Санкт-Петербург,  Митрофаньевское ш. 6АМ
							</p>
						</div>
						<div class="fphone">
							<div class="fmail-phone-image"><i class="fas fa-phone"></i>
							</div>
							<div class="phone-block">
								<p class="phone-block__nphone">8 (812) 319 36 02
								</p>
							</div>
						</div>
						<div class="fmail">
							<div class="fmail-phone-image"><i class="fas fa-at"></i>
							</div><a class="fmail__email" href="mailto:info@avtouzor.ru">info@avtouzor.ru</a>
						</div>
					</div>
					<div class="soc">
						<p>Мы в соц. сетях:<a class="fab fa-vk" href="https://vk.com/avtouzor" target="_blank"></a><a class="fab fa-facebook-f" href="https://www.facebook.com/avtouzor" target="_blank"></a>
						</p>
					</div>
				</div>
			</div>
			<div class="map">
				<iframe class="map-block" src="https://yandex.ru/map-widget/v1/?um=constructor%3A0ed45f9d527abf23ffef6652ed67d3b84a6a6092ec489ca93293d02a415130dd&amp;amp;source=constructor" height="300" frameborder="0" style="border:0" allowfullscreen="allowfullscreen">
				</iframe>
			</div>
		</div>
	</div><img class="footer-section__fsmoke" src="<?php bloginfo('template_url')?>/assets/images/smoke_footer.png" heith="550" alt="" role="presentation"/>
</footer>
<div class="modal-window" id="modal">
	<div class="modal-block">
		<h2 class="modal-block__head">Хотите получить консультацию?
		</h2>
		<p class="modal-block__text">Заполните поля и наш специалист свяжется с Вами
		</p>
		<form class="modal-form">
			<input class="modal-form__form-input" name="name" type="text" placeholder="Ваше имя" required="required"/>
			<input class="modal-form__form-input js js_phone-mask" name="phone" type="tel" placeholder="Ваше номер телефона" required="required"/>
			<button class="modal-form__form-btn js js_modalThanks" type="submit">Отправить
			</button>
		</form>
	</div>
	<div class="modal-thanks" id="thanks">
		<div class="modal-block-thanks">
			<h2 class="modal-block-thanks__head">Спасибо за заявку
				<p class="modal-block-thanks__text">Наш специалист свяжется с Вами в ближайшее время!
				</p>
			</h2>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
