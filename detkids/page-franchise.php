<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon.png" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon.png" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="description" content="">
	<meta name="Keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/css/uikit.min.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- 	<link rel="stylesheet" href="css/justifiedGallery.min.css" />
	<link rel="stylesheet" href="fonts/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">  -->
	<?php wp_head(); ?>
	
</head>
<body style="background: #fff">

<a href="#franchcall" class="callback-franch" uk-toggle id="callback"><i class="fas fa-phone"></i></a>
<div id="franchcall" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical">
    	<form action="" id="franchcall-form" class="modal-form"> 
    		<button class="uk-modal-close-default" type="button" uk-close></button>
    		<div class="modal-top">
    			<img src="<?php echo get_template_directory_uri() ?>/img/modal-top.png" alt=""> 
    		</div>
    		
    		<h3 class="form-title" style="margin-top: 30px;">Заказать обратный звонок</h3>
    		<div class="input-container">
    			<input type="text" placeholder="Имя:" name="name">
    		</div>
    		<div class="input-container">
    			<input type="text" placeholder="Телефон:" name="phone">
    		</div>
    		<div class="input-container">
    			<textarea id="" cols="30" rows="3" placeholder="Текст вопроса: " name="comment"></textarea>
    		</div>
    		<div class="checkbox">
    			<input type="checkbox" name="confid">
    		<p>Я согласен с <a href="http://detkids.com/confid.pdf" target="_blank"> политикой конфиденциальности</a></p>
    		</div>			
    		
    		<button type="submit" class="btn-submit">Отправить</button>
    	</form>
    	
    </div>
</div>
<!-- <div id="modal-browser" class="uk-flex-top" uk-modal>
		    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

		        <button class="uk-modal-close-default" type="button" uk-close></button>

		        <p>Для корректного отображения функционала нашего сайта рекомендуем Вам воспользоваться браузерами Chrome, Yandex, Mozilla Firefox, Opera</p>

		    </div>
</div> -->
<section id="franch-head">
	<div class="uk-container uk-flex uk-flex-wrap">
		<div class="uk-width-1-2 head-img">
			<img src="http://detkids.com/wp-content/themes/detkids/img/logo-franch.png" alt="">
		</div>
		<div class="uk-width-1-2 head-cont">
			<a href="tel:+79373877728">+ 7 (937) 387-77-28</a><br>
			<a href="mailto:franch@detkids.com">franch@detkids.com</a>
		</div>
	</div>
	
</section>
<section id="franch-detkids">

		<div class="face-slider">
			<div uk-slider="autoplay: true;autoplay-interval: 3000; center: true">

    <div class="uk-position-relative">

        <div class="uk-slider-container uk-light">
            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-grid " >
	        <li>
	            <div class="uk-cover-container">
	                <?php if ( get_field( 'image_1') ) { ?>
						<img src="<?php the_field( 'image_1' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
	        <li>
	            <div class="uk-cover-container">
					<?php if ( get_field( 'image_2') ) { ?>
						<img src="<?php the_field( 'image_2' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
	        <li>
	            <div class="uk-cover-container">
					<?php if ( get_field( 'image_3') ) { ?>
						<img src="<?php the_field( 'image_3' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
	        <li>
	            <div class="uk-cover-container">
					<?php if ( get_field( 'image_4') ) { ?>
						<img src="<?php the_field( 'image_4' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
	        <li>
	            <div class="uk-cover-container">
					<?php if ( get_field( 'image_5') ) { ?>
						<img src="<?php the_field( 'image_5' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
            </ul>
        </div>


    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
	
		</div>		
</section>
<section id="franch-form">
	<div class="uk-container">
		<p class="franch-title">Оставьте заявку и узнайте как зарабатывать <br>от 200 000 р. в месяц на рекламе и фотосъёмках!</p>
		<p class="franch-title" style="font-size: 1.3rem;">Подключайся к сети федерального издания и запусти журнал «ДЕТКIDS» в своём городе!</p>
		<div class="form-container">
			<?php echo do_shortcode('[contact-form-7 id="283" title="Франшиза"]') ?>
		</div>
		
	</div>
	

</section>
<footer id="footer" >
	<div class="uk-container">
		<img src="http://detkids.com/wp-content/themes/detkids/img/logo.png" alt="" class="footer-logo">
		<div style="border-bottom: 2px #fff solid;">
			<ul class="footer-soc uk-child-width-1-4 submenu" uk-grid>
				<li style="visibility: hidden;"><a href="https://www.facebook.com/detkids21/" target="_blank" class="facebook"><img src="<?php echo get_template_directory_uri() ?>/img/icons/facebook.png" alt=""></a></li>
				<li><a href="https://www.instagram.com/detkids/" target="_blank" class="instagram"><img src="<?php echo get_template_directory_uri() ?>/img/icons/insta.png" alt=""></a></li>
				<li><a href="https://vk.com/detkids" target="_blank" class="vk"><img src="<?php echo get_template_directory_uri() ?>/img/icons/vk.png" alt=""></a></li>
				<li style="visibility: hidden;"><a href="https://www.youtube.com/channel/UCBSyzw9UufzAQPveVhQBlNw" target="_blank" class="youtube"><img src="<?php echo get_template_directory_uri() ?>/img/icons/youtube.png" alt=""></a></li>
				
				
				
			</ul>
		</div>
		<div class="footer-info">
			<p>©2014-2019 OOO «Кидс Медиа»</p>
			<p style="font-weight: 600">+ 7 (8352) 211 711</p>
			<p style="font-weight: 600">franch@detkids.com</p>
			<!-- <p style="font-size: 12px;">
			 <a href="polzovat.pdf" target="_blank" >Пользовательское соглашение</a></p> -->
		</div>
		
	</div>
	<!-- <div class="law-info">
		<div class="law-cont">
			<div class="uk-container">
				<p>Журнал «ДЕТKIDS» зарегистрирован Управлением Федеральной службы по надзору в сфере связи, информационных технологий и массовых коммуникаций по Чувашской Республике – Чувашии. Возрастная категория журнала и сайта 6+. Свидетельство ПИ № ТУ21-00328 от 31 марта 2014 года. Рекламно-информационное издание. Учредитель и правообладатель знака «ДЕТKIDS» ООО «КИДС МЕДИА».Все права защищены. Запрещается копирование, распространение и любое использование материалов, полностью или частично, без согласия ООО «Кидс Медиа». Ответственность за содержание рекламно-информационных материалов несёт рекламодатель. Все рекламируемые товары и услуги, подлежащие сертификации и лицензированию – сертифицированы и лицензированы. Мнение учредителя может не совпадать с мнением авторов материалов. Информация от авторов (не специалистов), содержащаяся на сайте, не является научной и не выступает в качестве медицинских рекомендаций. Она основана на личном опыте авторов и носит лишь обзорный характер. Все фотоматериалы на сайте размещены с разрешения правообладателей.</p>	
			</div>
		</div>
	</div> -->
</footer>

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- <script src="js/jquery.justifiedGallery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>

<script type="text/javascript" src="js/main.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/js/uikit-icons.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>