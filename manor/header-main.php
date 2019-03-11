

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Бутик-отель Манор Хаус</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="description" content="">
	<meta name="Keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/x-icon" href="/favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/css/uikit.min.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
	
<?php wp_head(); ?>

</head>
<script>
	(function($){
		$(window).on('load', function () {
		    $preloader = $('.loaderArea'),
		      $loader = $preloader.find('.loader');
		    $loader.fadeOut();
		    $preloader.delay(350).fadeOut('slow');
		  });
	})(jQuery);
  
</script>
<!-- <div class="loaderArea">
   <div class="loader">
   	
   	  <div id="cube-loader">
    <div class="caption">
      <div class="cube-loader">
        <div class="cube loader-1"></div>
        <div class="cube loader-2"></div>
        <div class="cube loader-4"></div>
        <div class="cube loader-3"></div>
      </div>
    </div>
  </div>
   </div>
</div> -->
<!-- ///HEADER/// -->
<a  class="menu-trigger uk-position-fixed uk-position-center-left uk-margin-medium-left uk-visible@s" uk-icon="icon:table;ratio:1.5" href="#my-id" uk-toggle></a>
<div uk-drop="mode: click;pos: right-center" id="my-id">
        <div class="uk-card uk-card-body uk-card-default">
        	<div class="white white-main" style="position: relative;"> 
			<ul>
				
							<li><a href="#contact" uk-scroll><i class="fas fa-map-marker-alt "></i>Контакты</a></li>
							
							<li><a href="#gallery" class="" uk-scroll><i class="far fa-image "></i>Галерея</a></li>
							<li><a href="#catalog" uk-scroll><i class="fas fa-hotel"></i>Номера</a></li>
							<li><a href="" uk-toggle="target: #modal-center"><i class="fas fa-shopping-cart"></i>Бронирование</a></li>
			</ul>
        	</div>
        	
        </div>
</div>
<header>
	<!-- <div class="uk-container"> -->
	<div uk-grid>
		<div class="uk-width-1-1@s">
			<div class="top-menu" uk-sticky>
				<nav class="uk-navbar-container  uk-visible@m main-navigation" uk-navbar>
					<div class="uk-navbar-center">
						<div class="uk-navbar-center-left">
							<? wp_nav_menu(array('menu' => 'left-menu', 'menu_class' => 'uk-navbar-nav')); ?>
						</div>
						<a class="uk-navbar-item uk-logo" href="https://manor-house.net"><img src="https://manor-house.net/wp-content/uploads/2018/09/logo.png" alt="" class="logo3"></a>
						<div class="uk-navbar-center-right">
							<? wp_nav_menu(array('menu' => 'right-menu', 'menu_class' => 'uk-navbar-nav')); ?>
						</div>
						
						
					</div>
					<!-- <div class="uk-navbar-right">

						        <div>
						            <a class="uk-navbar-toggle" uk-search-icon href="#"></a>
						            <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
						                <form class="uk-search uk-search-navbar uk-width-1-1">
						                    <input class="uk-search-input" type="search" placeholder="Поиск..." autofocus>
						                </form>
						            </div>
						        </div>
						        <a href="#" class="cart"><span uk-icon="icon: cart"></span></a>
						        

						    </div> -->
				</nav>
				<div class="uk-container uk-hidden@m">
					<div uk-grid>
					<div class="uk-width-2-3 uk-hidden@m"> <a href="mailto:manor-house21@yandex.ru" style="margin-bottom: 5px; color:#000"><i class="far fa-envelope" style="margin-right: 10px"></i>manor-house21@yandex.ru</p>
		                        <a href="tel:+79196683000"  style="color: #000"><i class="fas fa-phone" style="margin-right: 10px"></i>+7(919)668 30 00</a> </div>
						<div class=" uk-width-expand uk-hidden@m">
							<button class="uk-navbar-toggle uk-hidden@m uk-align-right" type="button" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav"></button>
							<div id="offcanvas-nav" class="" uk-dropdown>
								<div class="">
									<? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'uk-nav' . ' ' . 'uk-dropdown-nav')); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>

			
			<!-- <div uk-grid>
				<div class="uk-width-2-3 uk-hidden@s"> <a href="mailto:manor-house.21@yandex.ru" style="margin-bottom: 5px; color:#fff">manor-house.21@yandex.ru</p>
                        <a href="tel:+79196683000"  style="color: #fff">+7(919)668 30 00</a> </div>
				<div class=" uk-width-expand uk-hidden@s">
					<button class="uk-navbar-toggle uk-hidden@s uk-align-right" type="button" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav"></button>
					<div id="offcanvas-nav" class="" uk-dropdown>
						<div class="">
							<ul class="uk-nav uk-dropdown-nav">
								<li><a href="#about" uk-scroll>О НАС</a></li>
								<li><a href="#bron" uk-scroll>БРОНИРОВАНИЕ</a></li>
								<li><a href="#open" uk-scroll>СТАТЬИ</a></li>
								<li><a href="#catalog" uk-scroll>НОМЕРА</a></li>
								<li><a href="#contact" uk-scroll>КОНТАКТЫ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!-- </div>
 -->

</header>