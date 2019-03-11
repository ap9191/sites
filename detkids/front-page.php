<?php get_header(); ?>
<section class="city">
	<div class="uk-container"><a href="#modal-top" uk-toggle class="city-button"><img src="<?php echo get_template_directory_uri() ?>/img/before-btn.png" alt="" class="before-btn" uk-parallax="x: 0,50,150; y: 0,40,0"><img src="<?php echo get_template_directory_uri() ?>/img/after-btn.png" alt="" class="after-btn" uk-parallax="x: 0,-50,-150;">ГОРОДА<br><img src="<?php echo get_template_directory_uri() ?>/img/btn-top.png" alt="" class="city-arrow"></a></div>
</section>
<!-- modal -->
<div id="modal-top" uk-modal >
    <div id="modal-dialog" class="uk-modal-dialog" >
    	<div class="modal-map">
    		<img src="<?php echo get_template_directory_uri() ?>/img/map.png" alt="">
    		<a href="https://vk.com/detkids77" class="city1" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/map-marker.png" alt="" >Москва</a>
    		<!--<a href="https://vk.com/detkids52" class="city2" target="_blank">Н. Новгород<img src="<?php //echo get_template_directory_uri() ?>/img/map-marker.png" alt=""></a>-->
    		<a href="https://vk.com/detkids36" class="city3" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/map-marker.png" alt="">Воронеж</a>
    		<a href="https://vk.com/detkids" class="city4" style="" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/map-marker.png" alt="" style="">Чебоксары</a>
    		<a href="https://vk.com/detkids23" class="city5" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/map-marker.png" alt="">Сочи</a>
    		<a href="https://vk.com/detkids59" class="city6" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/map-marker.png" alt="">Пермь</a>
    		<a href="https://vk.com/detkids86" class="city7" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/map-marker.png" alt="">Сургут</a>
    		<a href="https://vk.com/detkids_barnaul" class="city8" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/map-marker.png" alt="">Барнаул</a>
    		<a href="https://vk.com/detkids72" class="city9" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/map-marker.png" alt="">Тюмень</a>
    		<a href="https://vk.com/detkids12" class="city10" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/map-marker.png" alt="">Йошкар-Ола</a>
    	</div>
    	<form action="" id="modal-form" class="modal-form" > 
    		<button class="uk-modal-close-default" type="button" uk-close></button>
    		<img src="<?php echo get_template_directory_uri() ?>/img/modal-before.png" alt="" class="modal-overlay"> 
    		<h3 class="form-title">Заказать рекламу</h3>
    		<div class="input-container">
    			<input type="text" placeholder="Город:" name="city">
    		</div>
    		<div class="input-container">
    			<input type="text" placeholder="E-mail:" name="email">
    		</div>
            <div class="input-container">
                <input type="text" placeholder="Телефон:" name="phone">
            </div>
    		<div class="input-container">
    			<input type="text" placeholder="Контактное лицо:" name="name">
    		</div>
    		<div class="input-container">
    			<textarea id="" cols="30" rows="3" placeholder="Комментарии: " name="comment"></textarea>
    		</div>
    		<div class="checkbox">
    			<input type="checkbox" name="confid">
    		<p>Я согласен с <a href="http://detkids.com/confid.pdf" target="_blank"> политикой конфиденциальности</a></p>
    		</div>			
    		
    		<button type="submit" class="btn-submit">Выслать прайс</button>
    	</form>
    	<button class="uk-modal-close-default" type="button" uk-close></button>
    </div>
</div>

<!-- modal -->
<section id="journal">
	<div class="uk-container">
		<h3 class="title">
			ЖУРНАЛ
		</h3>
		<p class="date"><?php the_field( 'journal-date' ); ?></p>
		<div class="photo-container">
			<div class="journal1">
				<a href="<?php the_field( 'journal-link' ); ?>" target="_blank">
					<?php if ( get_field( 'journal-photo1') ) { ?>
						<img src="<?php the_field( 'journal-photo1' ); ?>" />
					<?php } ?>
				</a>
			</div>
			<div class="journal2">
				<?php if ( get_field( 'journal-photo2') ) { ?>
					<img src="<?php the_field( 'journal-photo2' ); ?>" />
				<?php } ?>
			</div>
			<div class="journal3">
				<?php if ( get_field( 'journal-photo3') ) { ?>
					<img src="<?php the_field( 'journal-photo3' ); ?>" />
				<?php } ?>
			</div>
			<div class="journal4">
				<?php if ( get_field( 'journal-photo4') ) { ?>
					<img src="<?php the_field( 'journal-photo4' ); ?>" />
				<?php } ?>
			</div>
			<div class="journal5">
				<?php if ( get_field( 'journal-photo5') ) { ?>
					<img src="<?php the_field( 'journal-photo5' ); ?>" />
				<?php } ?>
			</div>
		</div>
		<div class="journal-descr">
			<p class="desc-header">На обложке</p>
			<p><span>Md: </span><?php the_field( 'journal-models' ); ?></p>
			<p><span>Ph: </span><?php the_field( 'journal-photograph' ); ?></p>
			<p class="more"><a href="<?php the_field( 'journal-link' ); ?>" target="_blank">Читать журнал <!-- <i class="fas fa-angle-double-right"></i> --></a></p>
		</div>
	</div>
	
</section>
<section id="actual">
	<div class="uk-container">
		<h3 class="title">
			АКТУАЛЬНО
			<span uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;">актуально</span>
		</h3>
	</div>
	<div class="uk-container uk-hidden@s" style="padding-top: 30px">
		 	<div uk-slider="autoplay: true">

    <div class="uk-position-relative uk-visible-toggle uk-light">

        <ul class="uk-slider-items uk-child-width-1-1 uk-grid">
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top uk-position-relative">
                        <?php if ( get_field( 'actual-image1') ) { ?>
							<img src="<?php the_field( 'actual-image1' ); ?>" />
						<?php } ?>
                         <div uk-lightbox class="uk-position-cover"><?php the_field( 'actual-text1' ); ?>
									<a href="<?php the_field( 'actual-image1' ); ?>" class="ligthboxes"></a>
                                </div>
                    </div>
                    <div class="uk-card-body">
                       
                        <p><?php the_field( 'actual-title1' ); ?></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top uk-position-relative">
						<?php if ( get_field( 'actual-image2') ) { ?>
							<img src="<?php the_field( 'actual-image2' ); ?>" />
						<?php } ?>
                        <div class="uk-position-cover" uk-lightbox><?php the_field( 'actual-text2' ); ?>
                                	<a href="<?php the_field( 'actual-image2' ); ?>" class="ligthboxes"></a></div>
                    </div>
                    <div class="uk-card-body">
                        
                        <p><?php the_field( 'actual-title2' ); ?></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top uk-position-relative">
                        	<?php if ( get_field( 'actual-image3') ) { ?>
								<img src="<?php the_field( 'actual-image3' ); ?>" />
							<?php } ?>
                        <div uk-lightbox class="uk-position-cover"><?php the_field( 'actual-text3' ); ?>
                                <a href="<?php the_field( 'actual-image3' ); ?>" class="ligthboxes"></a></div>
                    </div>
                    <div class="uk-card-body">
                        
                        <p><?php the_field( 'actual-title3' ); ?></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top uk-position-relative">
						<?php if ( get_field( 'actual-image4') ) { ?>
							<img src="<?php the_field( 'actual-image4' ); ?>" />
						<?php } ?>
                        <div uk-lightbox class="uk-position-cover"><?php the_field( 'actual-text4' ); ?>
									<a href="<?php the_field( 'actual-image4' ); ?>" class="ligthboxes"></a>
                                </div>
                    </div>
                    <div class="uk-card-body">
                        
                        <p><?php the_field( 'actual-title4' ); ?></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top uk-position-relative">
                        <?php if ( get_field( 'actual-image5') ) { ?>
							<img src="<?php the_field( 'actual-image5' ); ?>" />
						<?php } ?>
                        <div uk-lightbox class="uk-position-cover"><?php the_field( 'actual-text5' ); ?>
                                	<a href="<?php the_field( 'actual-image5' ); ?>" class="ligthboxes"></a></div>
                    </div>
                    <div class="uk-card-body">
                        
                        <p><?php the_field( 'actual-title5' ); ?></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top uk-position-relative">
						<?php if ( get_field( 'actual-image6') ) { ?>
							<img src="<?php the_field( 'actual-image6' ); ?>" />
						<?php } ?>
                        <div uk-lightbox class="uk-position-cover"><?php the_field( 'actual-text6' ); ?>
                                	<a href="<?php the_field( 'actual-image6' ); ?>" class="ligthboxes"></a></div>
                    </div>
                    <div class="uk-card-body">
                        
                        <p><?php the_field( 'actual-title6' ); ?></p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top uk-position-relative">
						<?php if ( get_field( 'actual-image7') ) { ?>
							<img src="<?php the_field( 'actual-image7' ); ?>" />
						<?php } ?>
                        <div uk-lightbox class="uk-position-cover"><?php the_field( 'actual-text7' ); ?>
                                	<a href="<?php the_field( 'actual-image7' ); ?>" class="ligthboxes"></a></div>
                    </div>
                    <div class="uk-card-body">
                        
                        <p><?php the_field( 'actual-title7' ); ?></p>
                    </div>
                </div>
            </li>
        </ul>

       
    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
		 </div>
	<div class="carousel_wrap uk-visible@s">
                   <div id="carousel">
                        <div class="shadow">
                            <img src="//detkids.com/wp-content/themes/detkids/img/640x3601.gif" id="item-1" />
                            <div class="caption carous_item carous_item3" >
								<?php if ( get_field( 'actual-image1') ) { ?>
									<img src="<?php the_field( 'actual-image1' ); ?>" />
								<?php } ?>
                                <span class="carous_desc"><?php the_field( 'actual-title1' ); ?></span>
                                <div uk-lightbox><?php the_field( 'actual-text1' ); ?>
									<a href="<?php the_field( 'actual-image1' ); ?>" class="ligthboxes"></a>
                                </div>
                            </div>
                        </div>
                        <div  class="shadow">
                            <img src="//detkids.com/wp-content/themes/detkids/img/640x3601.gif" id="item-2" />
                            <div class="caption carous_item carous_item2">
								<?php if ( get_field( 'actual-image2') ) { ?>
									<img src="<?php the_field( 'actual-image2' ); ?>" />
								<?php } ?>
                                <span class="carous_desc"><?php the_field( 'actual-title2' ); ?></span>
                                <div uk-lightbox><?php the_field( 'actual-text2' ); ?>
                                	<a href="<?php the_field( 'actual-image2' ); ?>" class="ligthboxes"></a></div>
                            </div>
                        </div>
                        <div  class="shadow">
                            <img src="//detkids.com/wp-content/themes/detkids/img/640x3601.gif" id="item-3" />
                            <div class="caption carous_item carous_item7">
                            	<?php if ( get_field( 'actual-image3') ) { ?>
									<img src="<?php the_field( 'actual-image3' ); ?>" />
								<?php } ?>
                                <span class="carous_desc"><?php the_field( 'actual-title3' ); ?></span>
                                <div uk-lightbox><?php the_field( 'actual-text3' ); ?>7, 3 под., 5 этаж
                                <a href="<?php the_field( 'actual-image3' ); ?>" class="ligthboxes"></a></div>
                            </div>
                        </div>
                        <div>
                            <img src="//detkids.com/wp-content/themes/detkids/img/640x3601.gif" id="item-4" />
                            <div class="caption carous_item carous_item1">
								<?php if ( get_field( 'actual-image4') ) { ?>
									<img src="<?php the_field( 'actual-image4' ); ?>" />
								<?php } ?>
                                <span class="carous_desc"><?php the_field( 'actual-title4' ); ?></span>
                                <div uk-lightbox><?php the_field( 'actual-text4' ); ?>
                                <a href="<?php the_field( 'actual-image4' ); ?>" class="ligthboxes"></a></div>
                            </div>
                        </div>
                        <div  class="shadow">
                            <img src="//detkids.com/wp-content/themes/detkids/img/640x3601.gif" id="item-5" />
                            <div class="caption carous_item carous_item2">
								<?php if ( get_field( 'actual-image5') ) { ?>
									<img src="<?php the_field( 'actual-image5' ); ?>" />
								<?php } ?>
                                <span class="carous_desc"><?php the_field( 'actual-title5' ); ?></span>
                                <div uk-lightbox><?php the_field( 'actual-text5' ); ?>
                                <a href="<?php the_field( 'actual-image5' ); ?>" class="ligthboxes"></a></div>
                            </div>
                        </div>
                        <div  class="shadow">
                            <img src="//detkids.com/wp-content/themes/detkids/img/640x3601.gif" id="item-6" />
                            <div class="caption carous_item carous_item4">
								<?php if ( get_field( 'actual-image6') ) { ?>
									<img src="<?php the_field( 'actual-image6' ); ?>" />
								<?php } ?>
                                <span class="carous_desc"><?php the_field( 'actual-title6' ); ?></span>
                                <div uk-lightbox><?php the_field( 'actual-text6' ); ?>
                                <a href="<?php the_field( 'actual-image6' ); ?>" class="ligthboxes"></a></div>
                            </div>
                        </div>
                        <div  class="shadow">
                            <img src="//detkids.com/wp-content/themes/detkids/img/640x3601.gif" id="item-7" />
                            <div class="caption carous_item carous_item1">
								<?php if ( get_field( 'actual-image7') ) { ?>
									<img src="<?php the_field( 'actual-image7' ); ?>" />
								<?php } ?>
                                <span class="carous_desc"><?php the_field( 'actual-title7' ); ?></span>
                                <div uk-lightbox><?php the_field( 'actual-text7' ); ?>
                                <a href="<?php the_field( 'actual-image7' ); ?>" class="ligthboxes"></a></div>
                            </div>
                        </div>
                      
                </div>
                    <a id="prev" class="nav_button prev_button link pull-left" title="prev" uk-slidenav-previous><!-- &lt; --></a>
                    <a id="next" class="nav_button next_button link pull-right" title="next" uk-slidenav-next><!-- &gt; --></a>
                </div>
</section>
<section id="pathners">
	<h3 class="parthners-header">
		Наши<span > Партнёры</span>
	</h3>
	<div class="uk-container">
		<div id="mygallery" >
		    <div>
		        <img alt="Title 1" src="<?php echo get_template_directory_uri() ?>/img/parthners/7.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/6.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/5.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/11.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/12.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/13.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/14.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/1.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/10.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/9.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/8.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/4.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/3.png"/>
		    </div>
		    <div>
		        <img alt="Title 2" src="<?php echo get_template_directory_uri() ?>/img/parthners/2.png"/>
		    </div>

		    
		    <!-- other images... -->
		</div>
	</div>
</section>
<!-- <section id="team">
	<h3 class="title">
		КОМАНДА
		<span uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;">команда</span>
	</h3>
	<div class="uk-container">
		<div uk-grid class="uk-child-width-1-5@m uk-child-width-1-4@s uk-child-width-1-3 team-container">
			<div class="team-block">
				<img src="<?php echo get_template_directory_uri() ?>/img/team/1.jpg" alt="">
				<p class="name">Мария<br><span> Смирнова</span></p>
				<p class="rang">Генеральный директор и главный редактор</p>
			</div>
			<div class="team-block">
				<img src="<?php echo get_template_directory_uri() ?>/img/team/2.jpg" alt="">
				<p class="name">Сергей<br><span> Смирнов</span></p>
				<p class="rang">Директор по развитию</p>
			</div>
			<div class="team-block">
				<img src="<?php echo get_template_directory_uri() ?>/img/team/3.jpg" alt="">
				<p class="name">Елена<br><span> Рыбальченко</span></p>
				<p class="rang">Исполнительный директор</p>
			</div>
			<div class="team-block">
				<img src="<?php echo get_template_directory_uri() ?>/img/team/4.jpg" alt="">
				<p class="name">Анна<br><span> Новосёлова</span></p>
				<p class="rang">Арт-директор</p>
			</div>
			<div class="team-block">
				<img src="<?php echo get_template_directory_uri() ?>/img/team/5.jpg" alt="">
				<p class="name">Надежда<br><span> Машанова</span></p>
				<p class="rang">Руководитель отдела сопровождения клиентов</p>
			</div>
			<div class="team-block">
				<img src="<?php echo get_template_directory_uri() ?>/img/team/6.jpg" alt="">
				<p class="name">Марина<br><span> Павлова</span></p>
				<p class="rang">Руководитель PR-отдела</p>
			</div>
			<div class="team-block">
				<img src="<?php echo get_template_directory_uri() ?>/img/team/7.jpg" alt="">
				<p class="name">Елена<br><span> Михайлова</span></p>
				<p class="rang">Креативный дизайнер</p>
			</div>
			<div class="team-block">
				<img src="<?php echo get_template_directory_uri() ?>/img/team/8.jpg" alt="">
				<p class="name">Ольга<br><span> Картузова</span></p>
				<p class="rang">Ведущий дизайнер</p>
			</div>
			<div class="team-block">
				<img src="<?php echo get_template_directory_uri() ?>/img/team/9.jpg" alt="">
				<p class="name">Дмитрий<br><span> Воронченко</span></p>
				<p class="rang">Маркетолог-аналитик</p>
			</div>
			<div class="team-block">
				<img src="<?php echo get_template_directory_uri() ?>/img/team/10.jpg" alt="">
				<p class="name">Жанна<br><span> Петросян</span></p>
				<p class="rang">Менеджер по рекламе</p>
			</div>
            <div class="team-block">
                <img src="<?php echo get_template_directory_uri() ?>/img/team/11.jpg" alt="">
                <p class="name">Евгений<br><span> ЯКОВЛЕВ</span></p>
                <p class="rang">Веб-дизайнер</p>
            </div>
            <div class="team-block">
                <img src="<?php echo get_template_directory_uri() ?>/img/team/12.jpg" alt="">
                <p class="name">Ирина <br><span> КУЗЬМИНА </span></p>
                <p class="rang">Тренер-психолог</p>
            </div>
            <div class="team-block">
                <img src="<?php echo get_template_directory_uri() ?>/img/team/13.jpg" alt="">
                <p class="name">Наталия <br><span> ДЕВЯТЫХ</span></p>
                <p class="rang">Руководитель Продюсерского центра <br>«Театр моды ДЕТКIDS»</p>
            </div>
            <div class="team-block">
                <img src="<?php echo get_template_directory_uri() ?>/img/team/14.jpg" alt="">
                <p class="name">Кира <br><span> ЖДАНОВА</span></p>
                <p class="rang">Руководитель Клуба будущих мам «ДЕТKIDS» </p>
            </div>
            <div class="team-block">
                <img src="<?php echo get_template_directory_uri() ?>/img/team/15.jpg" alt="">
                <p class="name">Екатерина <br><span> ПРОКОПЬЕВА</span></p>
                <p class="rang">Специалист по работе с городами</p>
            </div>
			
		</div>
	</div>
</section> -->
<section id="projects">
	<h3 class="title">
		ПРОЕКТЫ
		<span uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;">проекты</span>
	</h3>
	<div class="container">
		  <ul id="prj">
		      <li aria-haspopup="true">
		        <a class="normal project1" href="https://vk.com/fotomodel_deti" target="_blank" >
		          <p class="white"><img src="<?php echo get_template_directory_uri() ?>/img/projects/logo1.png" alt=""></p>
		          <span class="overlay"></span>
		        </a>
		        <div class="info">
		          <h3>«ФОТОМОДЕЛЬ ПО-ДЕТСКИ»</h3>
		          <p>Ежегодный конкурс для детей в возрасте от 5 до 14 лет. Проект направлен на раскрытие талантов ребёнка, на развитие его творческих способностей, на раскрепощение и на развитие навыков работы в команде. Работа с профессиональной командой педагогов, фотографов, стилистов, имиджмейкеров, визажистов, дизайнеров, декораторов и т. д.</p>
		          
		        </div>
		        <div id="project-modal1" class="uk-flex-top" uk-modal>
				    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

				        <button class="uk-modal-close-default" type="button" uk-close></button>

				        <h3>«ФОТОМОДЕЛЬ ПО-ДЕТСКИ»</h3>
		         		<p>Ежегодный конкурс для детей в возрасте от 5 до 14 лет. Проект направлен на раскрытие талантов ребёнка, на развитие его творческих способностей, на раскрепощение и на развитие навыков работы в команде. Работа с профессиональной командой педагогов, фотографов, стилистов, имиджмейкеров, визажистов, дизайнеров, декораторов и т. д.</p>
		         		<p class="project-modal-link-container"><a class="project-modal-link" href="https://vk.com/fotomodel_deti" target="_blank">Перейти</a></p>

				    </div>
				</div>
		      </li>
		      <li aria-haspopup="true">
		        <a class="normal project2" href="https://vk.com/detkids" target="_blank">
		         <p class="white"><img src="<?php echo get_template_directory_uri() ?>/img/projects/logo2.png" alt=""></p>
		         <span class="overlay"></span>
		        </a>
		        <div class="info">
		          <h3>«МИСС И МИСТЕР ДЕТКIDS»</h3>
		          <p>Конкурс красоты и талантов, увлекательные мастер-классы, уроки подиума, уроки актёрского мастерства и сценического движения. Победители конкурса получают титул Мисс и Мистер «ДЕТKIDS» и возможность представлять журнал «ДETKIDS» в течение ГОДА в культурно-массовых и медиа площадках города!</p>
		        </div>
		        <div id="project-modal2" class="uk-flex-top" uk-modal>
				    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

				        <button class="uk-modal-close-default" type="button" uk-close></button>

				        <h3>«МИСС И МИСТЕР ДЕТКIDS»</h3>
		          <p>Конкурс красоты и талантов, увлекательные мастер-классы, уроки подиума, уроки актёрского мастерства и сценического движения. Победители конкурса получают титул Мисс и Мистер «ДЕТKIDS» и возможность представлять журнал «ДETKIDS» в течение ГОДА в культурно-массовых и медиа площадках города!</p>
		          <p class="project-modal-link-container"><a class="project-modal-link" href="https://vk.com/detkids" target="_blank">Перейти</a></p>

				    </div>
				</div>
		      </li>
		      <li aria-haspopup="true">
		        <a class="normal project3" href="https://vk.com/planetadeti21" target="_blank">
		          <p class="white"><img src="<?php echo get_template_directory_uri() ?>/img/projects/logo3.png" alt=""></p>
		          <span class="overlay"></span>
		        </a>
		        <div class="info">
		          <h3>«ПЛАНЕТА ДЕТИ»</h3>
		          <p>Межрегиональная выставка товаров и услуг для детей и родителей. Развлечения и мастер-классы, яркие тематические площадки, baby cross, игры и квесты, автограф-сессия с любимыми героями мультфильмов, лекторий с ведущими специалистами из разных отраслей родительства и детства, розыгрыш призов и подарков!</p>
		        </div>
		        <div id="project-modal3" class="uk-flex-top" uk-modal>
				    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

				        <button class="uk-modal-close-default" type="button" uk-close></button>

				        <h3>«ПЛАНЕТА ДЕТИ»</h3>
		          <p>Межрегиональная выставка товаров и услуг для детей и родителей. Развлечения и мастер-классы, яркие тематические площадки, baby cross, игры и квесты, автограф-сессия с любимыми героями мультфильмов, лекторий с ведущими специалистами из разных отраслей родительства и детства, розыгрыш призов и подарков!</p>
		          <p class="project-modal-link-container"><a class="project-modal-link" href="https://vk.com/planetadeti21" target="_blank">Перейти</a></p>

				    </div>
				</div>
		      </li>
		      <li aria-haspopup="true">
		        <a class="normal project4" href="https://vk.com/tancydetkids" target="_blank">
		          <p class="white"><img src="<?php echo get_template_directory_uri() ?>/img/projects/logo4.png" alt=""></p>
		          <span class="overlay"></span>
		        </a>
		        <div class="info">
		          <h3>«ТАНЦЫ С ДЕТКIDS»</h3>
		          <p>Танцевальный межрегиональный конкурс-фестиваль для детей от 3-х до 17 лет. К участию в конкурсе приглашаются солисты и ансамбли хореографических и других любительских и профессиональных творческих коллективов. Номинации: «Современный танец», «Народный танец», «Street – dance», «Бальный танец», «Эстрадный танец» и др. ГРАН – ПРИ конкурса: 10 тысяч рублей!</p>
		        </div>
		        <div id="project-modal4" class="uk-flex-top" uk-modal>
				    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

				        <button class="uk-modal-close-default" type="button" uk-close></button>

				        <h3>«ТАНЦЫ С ДЕТКIDS»</h3>
		          <p>Танцевальный межрегиональный конкурс-фестиваль для детей от 3-х до 17 лет. К участию в конкурсе приглашаются солисты и ансамбли хореографических и других любительских и профессиональных творческих коллективов. Номинации: «Современный танец», «Народный танец», «Street – dance», «Бальный танец», «Эстрадный танец» и др. ГРАН – ПРИ конкурса: 10 тысяч рублей!</p>
		          <p class="project-modal-link-container"><a class="project-modal-link" href="https://vk.com/tancydetkids" target="_blank">Перейти</a></p>

				    </div>
				</div>
		      </li>
		      <li aria-haspopup="true">
		        <a class="normal project5" href="https://vk.com/teatrmoddetkids" target="_blank">
		          <p class="white"><img src="<?php echo get_template_directory_uri() ?>/img/projects/logo5.png" alt=""></p>
		          <span class="overlay"></span>
		        </a>
		        <div class="info">
		          <h3>«ТЕАТР МОДЫ ДЕТКIDS»</h3>
		          <p>Приглашаем девочек и мальчиков от 5 до 14 лет. В программе обучения: подготовка к конкурсам и кастингам, подиум, фотопозирование и фотосессии, хореография и танцы, актёрское мастерство и т. д. Наши модели принимают участие в fashion-показах, съёмках для телевидения и глянцевых журналов, Всероссийских и Международных конкурсах, фестивалях и саммитах!</p>
		        </div>
		        <div id="project-modal5" class="uk-flex-top" uk-modal>
				    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

				        <button class="uk-modal-close-default" type="button" uk-close></button>

				        <h3>«ТЕАТР МОДЫ ДЕТКIDS»</h3>
		          <p>Приглашаем девочек и мальчиков от 5 до 14 лет. В программе обучения: подготовка к конкурсам и кастингам, подиум, фотопозирование и фотосессии, хореография и танцы, актёрское мастерство и т. д. Наши модели принимают участие в fashion-показах, съёмках для телевидения и глянцевых журналов, Всероссийских и Международных конкурсах, фестивалях и саммитах!</p>
		          <p class="project-modal-link-container"><a class="project-modal-link" href="https://vk.com/teatrmoddetkids" target="_blank">Перейти</a></p>

				    </div>
				</div>
		      </li>
		      <li aria-haspopup="true">
		        <a class="normal project6" href="https://vk.com/detkids" target="_blank">
		         <p class="white"><img src="<?php echo get_template_directory_uri() ?>/img/projects/logo6.png" alt=""></p>
		         <span class="overlay"></span>
		        </a>
		        <div class="info">
		          <h3>«ЁЛКИ С ДЕТКIDS»</h3>
		          <p>Волшебно! Оригинально! Незабываемо! <br>Сказочное представление, подарки и фуршет, мастер-классы и зимние чудеса — отличный подарок для всех детей и их родителей перед волшебным праздником «Новым Годом»! <br>Фотосессия с героями, сюрпризы, музыка, смех и новогодняя дискотека! Мы с нетерпением ждём всех поклонников сказки, волшебства и праздника!!! Подробности о билетах по тел.: 211-711</p>
		        </div>
		        <div id="project-modal6" class="uk-flex-top" uk-modal>
				    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

				        <button class="uk-modal-close-default" type="button" uk-close></button>

				        <h3>«ЁЛКИ С ДЕТКIDS»</h3>
		          <p>Волшебно! Оригинально! Незабываемо! <br>Сказочное представление, подарки и фуршет, мастер-классы и зимние чудеса — отличный подарок для всех детей и их родителей перед волшебным праздником «Новым Годом»! <br>Фотосессия с героями, сюрпризы, музыка, смех и новогодняя дискотека! Мы с нетерпением ждём всех поклонников сказки, волшебства и праздника!!! Подробности о билетах по тел.: 211-711</p>
		          <p class="project-modal-link-container"><a class="project-modal-link" href="https://vk.com/detkids" target="_blank">Перейти</a></p>

				    </div>
				</div>
		      </li>
		     

		  </ul>
		</div>

</section>
<section id="video">
	<div class="uk-container">
		<div class="video-container uk-child-width-1-1" uk-grid>
			<div uk-slider>

    <div class="uk-position-relative">

        <div class="uk-slider-container uk-light">
            <ul class="uk-slider-items uk-child-width-1-1">
	        <li>
	           <div class="video-block"><?php the_field( 'video1' ); ?></div>
	        </li>
	        <li>
	            <div class="video-block"><?php the_field( 'video2' ); ?>
	        </li>
	        <li>
	            <div class="video-block"><?php the_field( 'video3' ); ?></div>
	        </li>
	        
            </ul>
        </div>
        <div class="uk-hidden uk-light">
            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>

        <div class="uk-visible">
            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>


    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
			
		</div>
	</div>
</section>
<section id="say">
	<a href="http://detkids.com/face/" class="face">Стань лицом обложки<img src="<?php echo get_template_directory_uri() ?>/img/face-left.png" alt="" class="face-left"><img src="<?php echo get_template_directory_uri() ?>/img/face-right.png" alt="" class="face-right"></a>
	<h3 class="say-title title">SAY!<span uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;">say!</span></h3>
	 <div class="uk-container">
	 	<div uk-slider="autoplay: true">
			<div class="uk-position-relative">

        <div class="uk-slider-container">
	    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
	        <li>
	        	<div class="say-block">
	             <?php if ( get_field( 'say-photo1') ) { ?>
					<img src="<?php the_field( 'say-photo1' ); ?>" />
				<?php } ?>
	             <p class="name"><?php the_field( 'say-name1' ); ?><span> <?php the_field( 'say-surname1' ); ?></span></p> 
	             <p class="say-info"><?php the_field( 'say-text1' ); ?></p>      		
	        	</div>

	        </li>
	        <li>
	        	<div class="say-block">
				<?php if ( get_field( 'say-photo2') ) { ?>
					<img src="<?php the_field( 'say-photo2' ); ?>" />
				<?php } ?>
	             <p class="name"><?php the_field( 'say-name2' ); ?><span> <?php the_field( 'say-surname2' ); ?> </span></p> 
	             <p class="say-info"><?php the_field( 'say-text2' ); ?></p>      		
	        	</div>

	        </li>
	        <li>
	        	<div class="say-block">
				<?php if ( get_field( 'say-photo3') ) { ?>
					<img src="<?php the_field( 'say-photo3' ); ?>" />
				<?php } ?>
	             <p class="name"><?php the_field( 'say-name3' ); ?><span> <?php the_field( 'say-surname3' ); ?> </span></p> 
	             <p class="say-info"><?php the_field( 'say-text3' ); ?></p>      		
	        	</div>

	        </li>
	        <li>
	        	<div class="say-block">
				<?php if ( get_field( 'say-photo4') ) { ?>
					<img src="<?php the_field( 'say-photo4' ); ?>" />
				<?php } ?>
	             <p class="name"><?php the_field( 'say-name4' ); ?><span> <?php the_field( 'say-surname4' ); ?> </span></p> 
	             <p class="say-info"><?php the_field( 'say-text4' ); ?></p>      		
	        	</div>

	        </li>
	        <li>
	        	<div class="say-block">
				<?php if ( get_field( 'say-photo5') ) { ?>
					<img src="<?php the_field( 'say-photo5' ); ?>" />
				<?php } ?>
	             <p class="name"><?php the_field( 'say-name5' ); ?><span> <?php the_field( 'say-surname5' ); ?> </span></p> 
	             <p class="say-info"><?php the_field( 'say-text5' ); ?></p>      		
	        	</div>

	        </li>
	        <li>
	        	<div class="say-block">
				<?php if ( get_field( 'say-photo6') ) { ?>
					<img src="<?php the_field( 'say-photo6' ); ?>" />
				<?php } ?>
	             <p class="name"><?php the_field( 'say-name6' ); ?><span> <?php the_field( 'say-surname6' ); ?> </span></p> 
	             <p class="say-info"><?php the_field( 'say-text6' ); ?></p>      		
	        	</div>

	        </li>
	        <li>
	        	<div class="say-block">
				<?php if ( get_field( 'say-photo7') ) { ?>
					<img src="<?php the_field( 'say-photo7' ); ?>" />
				<?php } ?>
	             <p class="name"><?php the_field( 'say-name7' ); ?><span> <?php the_field( 'say-surname7' ); ?> </span></p> 
	             <p class="say-info"><?php the_field( 'say-text7' ); ?></p>      		
	        	</div>

	        </li>
	        <li>
	        	<div class="say-block">
				<?php if ( get_field( 'say-photo8') ) { ?>
					<img src="<?php the_field( 'say-photo8' ); ?>" />
				<?php } ?>
	             <p class="name"><?php the_field( 'say-name8' ); ?><span> <?php the_field( 'say-surname8' ); ?> </span></p> 
	             <p class="say-info"><?php the_field( 'say-text8' ); ?></p>      		
	        	</div>

	        </li>
	        <li>
	        	<div class="say-block">
				<?php if ( get_field( 'say-photo9') ) { ?>
					<img src="<?php the_field( 'say-photo9' ); ?>" />
				<?php } ?>
	             <p class="name"><?php the_field( 'say-name9' ); ?><span> <?php the_field( 'say-surname9' ); ?> </span></p> 
	             <p class="say-info"><?php the_field( 'say-text9' ); ?></p>      		
	        	</div>

	        </li>
	        <li>
	        	<div class="say-block">
				<?php if ( get_field( 'say-photo10') ) { ?>
					<img src="<?php the_field( 'say-photo10' ); ?>" />
				<?php } ?>
	             <p class="name"><?php the_field( 'say-name10' ); ?><span> <?php the_field( 'say-surname10' ); ?> </span></p> 
	             <p class="say-info"><?php the_field( 'say-text10' ); ?></p>      		
	        	</div>

	        </li>

	    </ul>
	</div>
	<div class="uk-hidden@s uk-light">
            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>

        <div class="uk-visible@m">
            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>
</div>
		 <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
	 </div>
		
</section>
<section id="together">
	<div class="uk-container">
		<p class="logo2"><img src="<?php echo get_template_directory_uri() ?>/img/logo2.png" alt=""></p>
		<div class="mockup-container">
			<img src="<?php echo get_template_directory_uri() ?>/img/mockup/1.png" alt="" class="mockup1">
			<img src="<?php echo get_template_directory_uri() ?>/img/mockup/2.png" alt="" class="mockup2">
			<img src="<?php echo get_template_directory_uri() ?>/img/mockup/3.png" alt="" class="mockup3">
			<img src="<?php echo get_template_directory_uri() ?>/img/mockup/4.png" alt="" class="mockup4">
			<img src="<?php echo get_template_directory_uri() ?>/img/mockup/bottom.png" alt="" class="mockup5">
		</div>
		<div class="buttons " uk-grid>
			<!-- <div class="uk-width-1-3">
				<div class="button-block block1">
					<p class="name"><span>ЦИФРОВАЯ </span><br>версия журнала</p>
					<p><a href=""></a></p>
				</div>
			</div> -->
			<div class="uk-width-1-2" style="padding-left: 0">
				<div class="button-block block2">
					<p class="name"><span>ПЕЧАТНАЯ </span><br>версия журнала</p>
					<p><a href="https://ru.calameo.com/accounts/5764079" target="_blank">архивы</a></p>
				</div>
			</div>
			<div class="uk-width-1-2" style="padding-left: 0">
				<div class="button-block block3">
					<p class="name"><span>ONLINE </span><br>версия журнала</p>
					<p><a href="">подписка</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>