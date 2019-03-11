<?php get_header(); ?>
<section id="banner" style="<? if(is_page('about')) { echo 'background: url(http://manor-house.net/wp-content/uploads/2018/09/bnr1.png) no-repeat scroll center 15% / cover'; };
								if(is_page('restaurant')) { echo 'background: #fff; min-height: auto'; };
								if(is_page('events')) { echo 'background: url(http://manor-house.net/wp-content/uploads/2018/09/bnr3.png) no-repeat scroll center center / cover'; }; ?>">
	<div class="dark"></div>
	<? if(is_page('restaurant')) {
		echo '
				<div class="uk-position-relative uk-visible-toggle uk-light" uk-slider>

    <ul class="uk-slider-items uk-child-width-1-1">
        <li>
            <img src="http://manor-house.net/wp-content/uploads/2018/10/bnr2_1.jpg" alt="">
            <div class="uk-position-center uk-panel"><h1>Ресторан</h1></div>
        </li>
        <li>
            <img src="http://manor-house.net/wp-content/uploads/2018/10/bnr2.jpg" alt="">
            <div class="uk-position-center uk-panel"><h1>Банкетный зал на 300 персон</h1></div>
        </li>
        <li>
            <img src="http://manor-house.net/wp-content/uploads/2018/10/bnr2_2.jpg" alt="">
            <div class="uk-position-center uk-panel"><h1>Малый банкетный зал на 35 мест</h1></div>
        </li>
       
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>
		';
	} 

	?>
	<!-- <div class="white white-page">
		<div class="uk-container"> <img src="http://manor-house.net/wp-content/uploads/2018/09/logo2.png" alt="" class="logo2 page">
			</div>
	</div> -->
</section>
<div class="uk-container">
		<div uk-grid>
			<div class="title-container">
				<img src="<? if(is_page('about')) { echo 'http://manor-house.net/wp-content/uploads/2018/09/about-icon.png';}; 
					if(is_page('restaurant')) { echo 'http://manor-house.net/wp-content/uploads/2018/09/rest-icon.png';};
					?>" alt="" class="logo2 icon">
				<h3 class="uk-width-1-1 title"><?php the_title(); ?></h3>
				<hr> </div></div></div>


<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>