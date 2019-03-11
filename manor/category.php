<!--Выводим шапку-->
<?php get_header(); ?>
<!--Индивидуальные стили-->
<div class="span-24" id="contentwrap">
<div class="span-16">
<div id="content">
<!--Заголовок рубрики-->
<h2><?php single_cat_title(); ?></h2>
<!--Код вывода заголовков постов из категории с миниатюрами-->
<div class="katalog">
<ul><?php query_posts('category__in=625&showposts=100'); ?>
<?php while (have_posts()) : the_post(); ?>
<li>
<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(80,70)); ?></a>
<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><br/>
</li>
<?php endwhile; ?>
</ul>
</div>
<!--Конец кода вывода постов из категории-->
</div>
</div>
<!--Тег вывода сайдбара-->
<?php get_sidebars(); ?>
</div>
<!--Конец индивидуальных стилей-->
<!--Тег вывода подвала-->
<?php get_footer(); ?>