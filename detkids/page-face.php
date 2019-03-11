<?php get_header(); ?>
	<div class="uk-container">
<section id="face-detkids">

		<div id="partof">
			<h3>СТАНЬТЕ ЧАСТЬЮ ДЕТKIDS!</h3>
			<p>Это отличная возможность пополнить портфолио ребёнка, дать ему шанс попробовать себя в роли модели или просто поучаствовать в интересном проекте и получить фотографии с профессиональной fashion-съёмки.</p>		
		</div>
		<div class="oblozhka">
			<h3 class="title">
		ОБЛОЖКА
		<span uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;">обложка</span>
		</h3>
		<p>На обложке может оказаться как ребёнок, так и вся ваша семья. Концепция съёмки и подготовка к ней – наша забота, а вашего ребёнка или семью увидит весь город. И, конечно, вы получите обработанные фотографии в электронном виде. <br>
		В случае, если вы представляете компанию и хотите рассказать о ней с самой выгодной полосы нашего журнала – свяжитесь с администратором группы. Стоимость зависит от условий съёмок.</p>
		</div>
		<div class="face-slider">
			<div uk-slider>

    <div class="uk-position-relative">

        <div class="uk-slider-container uk-light">
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s  uk-grid">
	        <li>
	            <div class="uk-panel">
	                <?php if ( get_field( 'cover1') ) { ?>
						<img src="<?php the_field( 'cover1' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
	        <li>
	            <div class="uk-panel">
	                <?php if ( get_field( 'cover2') ) { ?>
						<img src="<?php the_field( 'cover2' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
	        <li>
	            <div class="uk-panel">
	                <?php if ( get_field( 'cover3') ) { ?>
						<img src="<?php the_field( 'cover3' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
	        <li>
	            <div class="uk-panel">
	                <?php if ( get_field( 'cover4') ) { ?>
						<img src="<?php the_field( 'cover4' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
	        <li>
	            <div class="uk-panel">
	                <?php if ( get_field( 'cover5') ) { ?>
						<img src="<?php the_field( 'cover5' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
	        <li>
	            <div class="uk-panel">
	                <?php if ( get_field( 'cover6') ) { ?>
						<img src="<?php the_field( 'cover6' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
	        <li>
	            <div class="uk-panel">
	                <?php if ( get_field( 'cover7') ) { ?>
						<img src="<?php the_field( 'cover7' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
	        <li>
	            <div class="uk-panel">
	                <?php if ( get_field( 'cover8') ) { ?>
						<img src="<?php the_field( 'cover8' ); ?>" />
					<?php } ?>
	                
	            </div>
	        </li>
	        
            </ul>
        </div>


    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
	
		</div>
	<div class="photoproject">
		<h3 class="title" style="padding-bottom: 20px">
		ФОТОПРОЕКТЫ
		<span uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;">фотопроекты</span>
		</h3>
		<p>В каждый номер журнала мы снимаем актуальные и интересные фотопроекты с детьми. Мы сами подбираем локацию для съёмок, фотографа, стилистов и других необходимых специалистов, с вас только участие и хорошее настроение. По итогам съёмок вы получаете страницу с фото вашего ребёнка в журнале и обработанные фотографии с ним в электронном виде. Участие в проектах платное.</p>
	</div>		
	
	<div class="gallereya">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>

	</div>	

</section>
	</div>
<?php get_footer(); ?>