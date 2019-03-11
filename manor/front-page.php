<?php get_header('main'); ?>
<script>
     var ipay = new IPAY({api_token: 'ggirli8nuamag51mubkohm22hc'});
   </script>
<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<section id="banner">
	<div class="dark"></div>
 	<div class="white white-main">
		<!--<div class="uk-container">
			<img src="https://manor-house.net/wp-content/themes/manor/images/pict1.png" class="pict pict1" alt="">
			<img src="https://manor-house.net/wp-content/uploads/2018/09/logo.png" alt="" class="logo2">

			<img src="https://manor-house.net/wp-content/themes/manor/images/pict2.png" class="pict pict2" alt="">
			<p>БУТИК-ОТЕЛЬ</p>
			<h2 class="banner-title">Манор-Хаус</h2> </div> 



			<img src="https://manor-house.net/wp-content/themes/manor/images/pict.png" class="pict" alt="">-->
			<ul>
				
							<li><a href="#contact" uk-scroll><i class="fas fa-map-marker-alt "></i>Контакты</a></li>
							
							<li><a href="#gallery" class="" uk-scroll><i class="far fa-image "></i>Галерея</a></li>
							<li><a href="#catalog" uk-scroll><i class="fas fa-hotel"></i>Номера</a></li>
							<li><a href="" uk-toggle="target: #modal-center"><i class="fas fa-shopping-cart"></i>Бронирование</a></li>
			</ul>


	</div>
</section>
<!-- <div class="top-info uk-visible@s" >
				<nav class="uk-navbar-container uk-visible@s" uk-navbar>
					<div> <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/top-logo.png" alt=""> </div>
					<div class="uk-navbar-left">
						<ul class="uk-navbar-nav">
							<li><a href="mailto:manor-house21@yandex.ru"><i class="far fa-envelope"></i>manor-house21@yandex.ru</a></li>
							<li><a href="#contact" uk-scroll><i class="fas fa-map-marker-alt "></i>Как нас найти?</a></li>
							<li><a href="tel:+79196683000"><i class="fas fa-phone"></i>+7(919)668 30 00</a></li>
							<li><a href="#gallery" class="" uk-scroll><i class="far fa-image "></i>Галерея</a></li>
							<li><a href="#catalog" uk-scroll>Номера</a></li>
						</ul>
					</div>
					<div class="uk-navbar-right uk-visible@m ">
						<ul class="uk-navbar-nav">
							<li><a href="" uk-toggle="target: #modal-center">Бронирование</a></li>
						</ul>
					</div>
				</nav>
			</div> -->
<section id="about">
	<div class="uk-container">
		<div uk-grid>
			<div class="title-container">
				<h3 class="uk-width-1-1 title">О Нас</h3>
				<hr> </div>
			<!-- <div class="uk-width-1-2@s">
					<div class="image-container"><img src="https://manor-house.net/wp-content/uploads/2018/09/about.jpg" alt="" class="about-img"></div>
				</div> -->
			<div class="uk-width-1-4@s uk-visible@s"></div>
			<div class="uk-width-1-2@s">
				<p class="about-info"><span>"Манор-Хаус" </span>- бутик-отель, который находтися в самом роскошном месте города Чебоксары - в исторической части, на берегу реки Волга, которая гостеприимно встречает своих гостей. Великолепный вид на город и Волгу, всего пара минут ходьбы до набережной и Центрального пляжа с прогулочной зеленой зоной. Тут можно с удовольствием провести время, а для настоящих романтиков - встретить закаты и рассветы. </p>
			</div>
			<div class="uk-width-1-4@s uk-visible@s"></div>
		</div>
	</div>
</section>
<section id="bron">
	<!-- <div class="uk-container"> -->
	<div uk-grid>
		<div class="uk-width-1-2@m bron-container">
			<h3 class="form-title">
						Удобная система бронирования
					</h3>
			<p class="form-descr">Оставьте заявку на бронирование и получите гарантированные апартаменты на определенную дату</p>
			<a onclick="ipayCheckout({
    currency:'RUB',
    order_number:'',
    description: ''},
    function(order) { showSuccessfulPurchase(order) },
    function(order) { showFailurefulPurchase(order) })"
     
    class="btn btn-xs btn-outline btn-primary pay-button">Оплатить
</a>
		</div>
		<div class="uk-width-1-2@m form-container">
			<form action="" id="formform" method="post">
				<div class="label">
					<p class="form-label">Дата прибытия</p>
					<div class="input-container">
						<input type="text" name="first-date" class="datepicker-here change" data-date-format="dd/mm" placeholder="ДД/ММ" id="first-date"  required> </div>
				</div>
				<div class="label">
					<p class="form-label">Дата отъезда</p>
					<div class="input-container">
						<input type="text" name="second-date" class="datepicker-here change"  data-date-format="dd/mm" placeholder="ДД/ММ" id="second-date" required> </div>
				</div>
				<div class="label">
					<p class="form-label">Взрослых</p>
					<div class="input-container">
						<input type="number" name="humans" value="1" id="humans" class="change"> </div>
				</div>
				<div class="label">
					<p class="form-label">Детей</p>
					<div class="input-container">
						<input type="number" name="children" value="0" id="children" class="change"> </div>
				</div>
				<div uk-grid>
					<p class="time uk-width-2-3">Бронирование действует в течение 24 часов</p>
					<div class="bron-submit uk-width-1-3"> <button uk-toggle="target: #modal-center" type="submit" id="trigger" ><i class="fas fa-arrow-right"></i>Бронировать</button> </div>
				</div>
				 <p class="confid" style="width: 100%; text-align: right;"><a href="https://manor-house.net/payment.docx" target="_blank" style="color: #fff">Информация об оплате</a></p>
				
			</form>
		</div>
	</div>
	<!-- </div> -->
	<div id="modal-center" class="uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" uk-overflow-auto>

                            <button class="uk-modal-close-default" type="button" uk-close></button>

                            <form method="post" action="" id="form1" class="modal-form">
                            
                                <!-- <h3>Оставьте заявку</h3>
                               <h3 style="margin: 0">Получите скидку 20%</h3>
                                <p>Мы Вам перезвоним</p> -->

                                  <input type="hidden" name="subject" value="Заявка на бронирование">
                                  <!-- END Hidden Required Fields -->
                                <input type="text" placeholder="Имя" name="name" >
                                 <input type="text" placeholder="Фамилия" name="surname" >
                                  <input type="text" placeholder="Отчество" name="second-name" >
                                <input type="text" placeholder="E-mail" name="email">
                                <input type="text" placeholder="Телефон" id="phone" name="phone" >
                                <select name="number" id="numbers">
                                	<option value="" >Выберите номер</option>
                                	<option value="Люкс">Люкс</option>
                                	<option value="Супер-Люкс">Супер-Люкс</option>
                                </select>
                                <p class="form-label" style="color: #000">Дата прибытия</p>
                                <input type="text" name="first-date" class="datepicker-here" data-date-format="dd/mm" placeholder="ДД/ММ" value="" id="first-date1"> 
                                <p class="form-label" style="color: #000">Дата отъезда</p>
                                <input type="text" name="second-date" class="datepicker-here" data-date-format="dd/mm" placeholder="ДД/ММ" value="" id="second-date1">
                                <p class="form-label" style="color: #000">Взрослых</p> 
                                <input type="number" name="humans" value="" id="humans1"> 
                                <p class="form-label" style="color: #000">Детей</p>
                                <input type="number" name="children" value="" id="children1"> 
                                <p class="confid">Нажимая на кнопку вы подтверждаете свое согласие на обработку персональных даных. <br> <a href="" target="_blank">Политика коннфиденциальности</a></p>
                                <p class="confid"><a href="https://manor-house.net/payment.docx" target="_blank">Информация об оплате</a></p>
                                <button type="submit" >Отправить</button>
                                <button type="submit" id="payment"  onclick="ipayCheckout({
    currency:'RUB',
    order_number:'',
    description: ''},
    function(order) { showSuccessfulPurchase(order) },
    function(order) { showFailurefulPurchase(order) })"
     
   >Оплатить и отправить</button>

                            </form>

                        </div>
                    </div>
</section>
<section id="preferences">
	<div class="uk-container">
		<div uk-grid>
			<div class="title-container">
				<h3 class="uk-width-1-1 title">Наши преимущества</h3>
				<hr> </div>
			<div class="preferences"> <img src="https://manor-house.net/wp-content/uploads/2018/10/preferences.png" alt=""> </div>
			<!-- <div class="uk-width-1-4@s">
					<div class="pref-container uk-inline"><img src="https://manor-house.net/wp-content/uploads/2018/09/p1.jpg" alt="">
						<div class="dark"></div>
						<div class="pref-text uk-position-center uk-overlay">
							<i class="far fa-building"></i>
							<p>Вид на Волгу</p>
						</div>

					</div>
				</div>
				<div class="uk-width-1-4@s">
					<div class="pref-container uk-inline"><img src="https://manor-house.net/wp-content/uploads/2018/09/p2.jpg" alt="">
						<div class="dark"></div>
						<div class="pref-text uk-position-center uk-overlay">
							<i class="fas fa-bed"></i>
							<p>Семейные номера</p>
						</div>

					</div>
				</div>
				<div class="uk-width-1-4@s">
					<div class="pref-container uk-inline"><img src="https://manor-house.net/wp-content/uploads/2018/09/p3.jpg" alt="">
						<div class="dark"></div>
						<div class="pref-text uk-position-center uk-overlay">
							<i class="fas fa-utensils"></i>
							<p>Собственный ресторан</p>
						</div>

					</div>
				</div>
				<div class="uk-width-1-4@s">
					<div class="pref-container uk-inline"><img src="https://manor-house.net/wp-content/uploads/2018/09/p4.jpg" alt="">
						<div class="dark"></div>
						<div class="pref-text uk-position-center uk-overlay">
							<i class="fas fa-male"></i>
							<p>Качественный сервис</p>
						</div>

					</div>
				</div> --></div>
	</div>
</section>
<section id="catalog">
	<div class="uk-container">
		<div uk-grid>
			<div class="title-container">
				<h3 class="uk-width-1-1 title">Номера</h3> </div>
			<div uk-slider="autoplay: true; center: false; autoplay-interval: 1500">
				<div class="uk-position-relative uk-visible-toggle uk-light">
					<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s  uk-grid">
						<li>
							<div class="uk-card uk-card-default">
								<div class="uk-card-media-top">
									<div class="uk-inline">
										<a href="" uk-toggle="target: #modal-center"> <img src="https://manor-house.net/wp-content/uploads/2018/10/slider1.jpg" alt="">
									<div class="uk-overlay uk-overlay-default uk-position-bottom">
						                <h3 class="uk-card-title" style="margin-bottom: 0">ЛЮКС</h3>
									<p class="card-text" style="margin-top: 0">Вид на сад</p>
						            </div>
								</a>
									</div>
									 </div>
								<div class="uk-card-body">
									
									<p class="card-text">Уютный номер с элегантной отделкой и мебелью в классическом стиле: дерево, мрамор, текстиль,
огромная двуспальная кровать, кресла, шкаф. На площади в 30 м² расположена жилая комната, ванная
комната и туалет, гостиная зона.</p>
									<p class="price"><?php echo get_post_meta($post->ID, 'lux', true); ?> руб.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="uk-card uk-card-default">
								<div class="uk-card-media-top">
									<div class="uk-inline">
										<a href="" uk-toggle="target: #modal-center"> <img src="https://manor-house.net/wp-content/uploads/2018/10/slider3.jpg" alt="">
									<div class="uk-overlay uk-overlay-default uk-position-bottom">
						                <h3 class="uk-card-title" style="margin-bottom: 0">СУПЕР-ЛЮКС</h3>
									<p class="card-text" style="margin-top: 0">Вид на Волгу</p>
						            </div>
								</a>
									</div>
									 </div>
								<div class="uk-card-body">
									
									<p class="card-text">Уютный номер с элегантной отделкой и мебелью в классическом стиле: дерево, мрамор, текстиль,
огромная двуспальная кровать, кресла, шкаф. На площади в 30 м² расположена жилая комната, ванная
комната и туалет, гостиная зона.</p>
									<p class="price"><?php echo get_post_meta($post->ID, 'lux2', true); ?> руб.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="uk-card uk-card-default">
								<div class="uk-card-media-top">
									<div class="uk-inline">
										<a href="" uk-toggle="target: #modal-center">  <img src="https://manor-house.net/wp-content/uploads/2018/09/slider2.jpg" alt="">
								<div class="uk-overlay uk-overlay-default uk-position-bottom">
						                <h3 class="uk-card-title" style="margin-bottom: 0">ПРЕДСТАВИТЕЛЬСКИЙ ЛЮКС</h3>
									<p class="card-text" style="margin-top: 0">Вид на Волгу</p>
						            </div>
								 </a>
									</div>
									 </div>
								<div class="uk-card-body">
									
									<p class="card-text">Светлый, обладающий особым духом номер в стиле шикарного дворянского быта, где классика
сочетается с современной функциональностью на просторных 80 м². Спальная зона отделена
перегородкой, а гостиный уголок позволяет принимать посетителей.</p>
									<p class="price"><?php echo get_post_meta($post->ID, 'super-lux', true); ?> руб.</p>
								</div>
							</div>
						</li>
					</ul>
					<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous" style="    color: #000;"></a>
					<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next" style="    color: #000;"></a>
				</div>
				<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
			</div>
		</div>
	</div>
</section>
<section id="open">
	<div class="uk-container">
		<div uk-grid>
			<div class="title-container">
				<h3 class="uk-width-1-1 title">Открытие ресторана</h3>
				<hr> </div>
			<div class="uk-width-1-4@s uk-visible@s"></div>
			<div class="uk-width-1-2@s">
				<p class="about-info"><span>"Манор-Хаус" </span>- бутик-отель, который находтися в самом роскошном месте города Чебоксары - в исторической части, на берегу реки Волга, которая гостеприимно встречает своих гостей. Великолепный вид на город и Волгу, всего пара минут ходьбы до набережной и Центрального пляжа с прогулочной зеленой зоной. Тут можно с удовольствием провести время, а для настоящих романтиков - встретить закаты и рассветы. </p>
				<p><a href="https://manor-house.net/restaurant/" 
     
    class="btn btn-xs btn-outline btn-primary pay-button" style="width: 50%">Перейти в ресторан
</a></p>
			</div>
			
			<div class="uk-width-1-4@s uk-visible@s"></div>
		</div>
	</div>
</section>
<section id="gallery">
	<div class="title-container" style="background: url(https://manor-house.net/wp-content/uploads/2018/09/gbg.png);">
		<h3 class="title gallery uk-width-1-1" style="padding: 40px 0; color: #fff">Галерея</h3> </div>
	<div class="uk-container gallery-container">
		<div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
			<div class="gblock">
				<a class="uk-inline" href="https://manor-house.net/wp-content/uploads/2018/10/gallery1.jpg" data-caption=""> <img src="https://manor-house.net/wp-content/uploads/2018/09/gallery1.jpg" alt=""> </a>
			</div>
			<div class="gblock">
				<a class="uk-inline" href="https://manor-house.net/wp-content/uploads/2018/10/gallery2.jpg" data-caption=""> <img src="https://manor-house.net/wp-content/uploads/2018/09/gallery2.jpg" alt=""> </a>
			</div>
			<div class="gblock">
				<a class="uk-inline" href="https://manor-house.net/wp-content/uploads/2018/10/gallery3.jpg" data-caption=""> <img src="https://manor-house.net/wp-content/uploads/2018/09/gallery3.jpg" alt=""> </a>
			</div>
			<div class="gblock">
				<a class="uk-inline" href="https://manor-house.net/wp-content/uploads/2018/10/gallery4.jpg" data-caption=""> <img src="https://manor-house.net/wp-content/uploads/2018/09/gallery4.jpg" alt=""> </a>
			</div>
			<div class="gblock">
				<a class="uk-inline" href="https://manor-house.net/wp-content/uploads/2018/10/gallery5.jpg" data-caption=""> <img src="https://manor-house.net/wp-content/uploads/2018/09/gallery5.jpg" alt=""> </a>
			</div>
			<div class="gblock">
				<a class="uk-inline" href="https://manor-house.net/wp-content/uploads/2018/10/gallery6.jpg" data-caption=""> <img src="https://manor-house.net/wp-content/uploads/2018/09/gallery6.jpg" alt=""> </a>
			</div>
			<div class="gblock">
				<a class="uk-inline" href="https://manor-house.net/wp-content/uploads/2018/10/gallery7.jpg" data-caption=""> <img src="https://manor-house.net/wp-content/uploads/2018/10/gallery7.jpg" alt=""> </a>
			</div>
			<div class="gblock">
				<a class="uk-inline" href="https://manor-house.net/wp-content/uploads/2018/10/gallery8.jpg" data-caption=""> <img src="https://manor-house.net/wp-content/uploads/2018/10/gallery8.jpg" alt=""> </a>
			</div>
			<div class="gblock">
				<a class="uk-inline" href="https://manor-house.net/wp-content/uploads/2018/10/gallery9.jpg" data-caption=""> <img src="https://manor-house.net/wp-content/uploads/2018/10/gallery9.jpg" alt=""> </a>
			</div>
		</div>
		<div class="video-box" >
			
		</div>
	</div>
</section>
<section id="callback">
	<div uk-grid>
		<h3 class="title gallery uk-width-1-1" style="padding-bottom: 40px; font-family: 'DIN Pro',sans-serif;">Остались вопросы?</h3>

		<form action="" class="callback-form" id="form2">
			<div class="uk-container">
				<div uk-grid>
					<input type="hidden" name="subject" value="Заявка с сайта">
					<div class="uk-width-1-5@s media-input">
						<input type="text" name="name" placeholder="Имя"> </div>
					<div class="uk-width-1-5@s media-input">
						<input type="text" name="email" placeholder="E-mail"> </div>
					<div class="uk-width-2-5@s media-input">
						<input type="text" name="comment" placeholder="Сообщение"> </div>
					<div class="uk-width-1-5@s media-input">
						<button type="submit"><i class="fas fa-angle-double-right"></i> Отправить</button>
					</div>
					 <p class="confid" style="    margin-top: 15px;margin-bottom: 0;color: #fff;">Воспользовавшись формой, Вы подтверждаете свое согласие на обработку персональных даных.  <a href="" target="_blank">Политика коннфиденциальности</a></p>
				</div>
			</div>
		</form>
	</div>
</section>
<section id="contact">
	<div class="uk-container">
		<div uk-grid>
			<div class="contact"> <img class="logo2" src="https://manor-house.net/wp-content/uploads/2018/09/logo.png" alt="">
				<p>Манор-Хаус г. Чебоксары, ул. Михаила Сеспеля, 17</p>
				<p><a href="tel:+79196683000" style="color: #000;"><i class="fas fa-phone"></i>+7(919)668 30 00</a></p>
				<p><a href="mailto:manor-house21@yandex.ru" style="color: #000;"><i class="far fa-envelope"></i>manor-house21@yandex.ru</a></p>
			</div>
		</div>
		<div class="container">
		  <ul class="submenu uk-position-center uk-position-relative uk-margin-top" style="padding-left: 0">
		    
		    <li style="margin-left: 0"><a href="https://www.instagram.com/manor_house21/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a></li>
		   <!--  <li><a href="#" class="booking">B<span>.</span></a></li> -->
		  </ul>
		</div>
		<div class="recvisit">
    <button class="uk-button uk-button-default" type="button">Реквизиты организации</button>
    <div uk-dropdown="mode: click; pos:bottom-center;">ИП Иванов Сергей Кириллович <br>
428017, Чувашская Республика <br>
г.Чебоксары , ул. Новоилларионовская , д.3 <br>
Тел. 67-83-67, 58-06-32, 58-19-07 <br>
ОГРНИП 313213014300063 <br>
ИНН 212902767716</div>
</div>
	</div>
	<div class="map-container">
		<!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae7dd48fb0825f1bbf6b3c37a5da7d26188a7c766e551c394ab3bcc104a01813e&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script> -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1571.4242631748582!2d47.247415893121236!3d56.15140728620474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m3!3m2!1d56.152028099999995!2d47.249656099999996!4m5!1s0x415a382d65699379%3A0x561b1e68f17bb8b6!2z0YPQuy4g0JzQuNGF0LDQuNC70LAg0KHQtdGB0L_QtdC70Y8sIDE3LCDQp9C10LHQvtC60YHQsNGA0YssINCn0YPQstCw0YjRgdC60LDRjyDQoNC10YHQvy4sIDQyODAwMw!3m2!1d56.150867999999996!2d47.247668!5e0!3m2!1sru!2sru!4v1537945201193" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>
	<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>