<?php
/*
Template Name: Мой шаблон страницы
*/
?>
<?php get_header(); ?>
<section id="banner" style="background: url(https://manor-house.net/wp-content/uploads/2018/09/bnr3.png) no-repeat scroll center center / cover;">
	<div class="dark"></div>
	<div class="white white-page">
		<div class="uk-container"> <img src="https://manor-house.net/wp-content/uploads/2018/09/logo2.png" alt="" class="logo2 page">
			</div>
	</div>
</section>
<div class="uk-container">
		<div uk-grid>
			<div class="title-container">
				<img src="https://manor-house.net/wp-content/uploads/2018/09/event-icon.png" alt="" class="logo2 icon">
				<h3 class="uk-width-1-1 title"><?php the_title(); ?></h3>
				<hr> </div></div></div>


<section>
<section id="about">
	<div class="uk-container">
		<div uk-grid>
			
			
			<div class="uk-width-1-4@s uk-visible@s"></div>
			<div class="uk-width-1-2@s">
				<p class="about-info">Организация и проведение свадьбы — это долгожданное и очень важное событие в жизни двух влюбленных. В этот день должна царить атмосфера счастья, красоты и веселья. Если Вы хотите, чтобы Ваша свадьба была оригинальной, яркой и незабываемой — бутик отель «Manor House» станет идеальным решением!</p>
                                   
<p class="about-info">
<img src="https://manor-house.net/wp-content/uploads/2018/09/hr.png" alt"icon" class="hr"></p>

			</div>
			<div class="uk-width-1-4@s uk-visible@s"></div>
		</div>
	</div>
</section>
<section id="photo">
<div class="uk-container">
<div class="insta-container"><?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?></div>
</div>
</section>
<section id="events">
	<div class="uk-container">
		<div uk-grid>
			<div class="title-container">
				<img src="https://manor-house.net/wp-content/uploads/2018/09/event-icon2.png" alt="" class="logo2 icon">
				<h3 class="uk-width-1-1 title">События</h3>
				<hr> 
			</div>
				<div uk-slider="autoplay: true; center: false; autoplay-interval: 1500; finite: true">

     <div class="uk-position-relative uk-visible-toggle uk-light">

        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid">
			
        <?php // Display blog posts on any page @ http://m0n.co/l
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                       <a  href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail();?></a>
                    </div>
                    <div class="uk-card-body">
                       
                        <h3 style="color:#000;"><?php the_title(); ?></h3>
                        <p> <?php the_excerpt(); ?></p>
                        <p><a  href="<?php echo get_permalink(); ?>" class="post-link"> [ Читать далее → ]</a></p>
                    </div>
                </div>
            </li>
             <?php endwhile; ?>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous" style="    color: #000;"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next" style="    color: #000;"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>

			</div>
		</div>
				
</section>
</section>
<?php get_footer(); ?>