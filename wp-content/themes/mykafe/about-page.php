<?php
/*
	Template Name: ПРО НАС
*/
?>
<?php get_header(''); ?>
		<div id="content">
			<h2>ПРО НАС</h2>

			<p><?php query_posts(array('post__in' => array(136))); while (have_posts()) { the_post(); ?>
					<?php the_content(''); ?>
					<?php } wp_reset_query(); ?></p>
			<h3>Як нас знайти:</h3>
		<div class="about_map"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("about") ) : ?>
			<?php endif; ?>
		</div>
		<ul class="address">
			<li><?php bloginfo('name'); ?></li>
            <li>м. Черкаси, вул. Волкова, 71</li>
            <li>Телефон (0472) 72-01-45 </li>
            <li>Пн.-пт.: 11:00-23:00,</li>
            <li>cб.-нд.: 11:00-23:00</li>  
			<li>E-mail etalon.c@mail.ru</li>			
        </ul>	
		</div>
<?php get_footer(''); ?>