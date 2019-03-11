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
<body uk-parallax="bgy: 3000">
	<a href="" id="triangle-up" href="#" uk-scroll> <img src="<?php echo get_template_directory_uri() ?>/img/totop.png" alt=""></a>
	<a href="#modal-callback" uk-toggle id="callback"><img src="<?php echo get_template_directory_uri() ?>/img/callback.png" alt=""></a>

<div id="modal-callback" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical">
    	<form action="" id="callback-form" class="modal-form"> 
    		<button class="uk-modal-close-default" type="button" uk-close></button>
    		<div class="modal-top">
    			<img src="<?php echo get_template_directory_uri() ?>/img/modal-top.png" alt=""> 
    		</div>
    		
    		<h3 class="form-title" style="margin-top: 30px;">Связаться с редакцией</h3>
    		<div class="input-container">
    			<input type="text" placeholder="Имя:" name="name">
    		</div>
    		<div class="input-container">
    			<input type="text" placeholder="E-mail:" name="email">
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

<div id="modal-franch" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical">
    	<form action="" id="franch-form" class="modal-form"> 
    		<button class="uk-modal-close-default" type="button" uk-close></button>
    		<div class="modal-top">
    			<img src="<?php echo get_template_directory_uri() ?>/img/modal-top.png" alt=""> 
    		</div>
    		
    		<h3 class="form-title" style="margin-top: 30px;">Заявка на франшизу</h3>
    		<div class="input-container">
    			<input type="text" placeholder="Имя:" name="name">
    		</div>
    		<!-- <div class="input-container">
    			<input type="text" placeholder="E-mail:" name="email">
    		</div> -->
    		<div class="input-container">
    			<input type="text" placeholder="Телефон:" name="phone">
    		</div>
    		<div class="input-container">
    			<input type="text" placeholder="Город:" name="city">
    		</div>
    		<div class="checkbox">
    			<input type="checkbox" name="confid">
    		<p>Я согласен с <a href="http://detkids.com/confid.pdf" target="_blank"> политикой конфиденциальности</a></p>
    		</div>			
    		
    		<button type="submit" class="btn-submit">Отправить</button>
    	</form>
    	
    </div>
</div>

<header>
	
		<div uk-grid>
			<div class="top-menu" uk-sticky="width-element:.top-menu">
				<div class="uk-container">
				<nav class="uk-navbar-container" uk-navbar>
				
						<ul class="uk-navbar-nav">
							<li><a href="http://detkids.com/franchise/" target="_blank" >ФРАНШИЗА</a></li>
							<li><span>|</span></li>
							<li><a href="#actual" uk-scroll>АКТУАЛЬНО</a></li>
							<li><span>|</span></li>
							<li><a href="" uk-scroll>ДИРЕКЦИЯ</a></li>
							<li><span>|</span></li>
							<li><a href="#projects" uk-scroll>ПРОЕКТЫ</a></li>
							<li><span>|</span></li>
							<li><a href="#journal" uk-scroll>ЖУРНАЛ</a></li>
							<li><span>|</span></li>
							<li><a href="#footer" uk-scroll>КОНТАКТЫ</a></li>
						</ul>
				
				</nav>
			</div>
		</div>

	</div>
	<div class="uk-container">
		<a href="http://detkids.com"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" class="logo" alt=""></a>
	</div>
		
		<div id="modal-browser" class="uk-flex-top" uk-modal>
		    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

		        <button class="uk-modal-close-default" type="button" uk-close></button>

		        <p>Для корректного отображения функционала нашего сайта рекомендуем Вам воспользоваться браузерами Chrome, Yandex, Mozilla Firefox, Opera</p>

		    </div>
		</div>
</header>