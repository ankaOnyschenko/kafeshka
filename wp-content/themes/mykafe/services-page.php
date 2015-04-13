<?php
/*
	Template Name: Наші послуги
*/
?>
<?php get_header(''); ?>
		<div id="content">
			<h2>НАШІ ПОСЛУГИ</h2>
			<img src="<?php bloginfo('template_url') ?>/images/serv.jpg" alt="picture services" class="serv" />
			<p>
			<?php query_posts(array('post__in' => array(132))); while (have_posts()) { the_post(); ?>
					<?php the_content(''); ?>
					<?php } wp_reset_query(); ?>
			</p>
<h3>Банкетні страви</h3>
<?php
	$args = array(
		'post_type' => 'banquet',
		'order'     => 'ASC',
		);
			$banquet = new WP_Query( $args );
				if( $banquet->have_posts() ) {
						while( $banquet->have_posts() ) {
                $banquet->the_post();
?>	
<table>
  <tr>
	<td><?php the_title() ?><span><?php the_content() ?></span></td>
	<td><?php echo (get_post_meta($post->ID, 'weight', true)); ?></td>
	<td><?php echo (get_post_meta($post->ID, 'price', true)); ?></td>
</tr>
</table>			
	<?php
			}
		}
		else {
			echo 'В цю категорію, ще не додано жодної страви. Чекайте на новинки!';
		}
	?>
		</div>	
<?php get_footer(''); ?>