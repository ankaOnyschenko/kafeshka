<?php
/*
	Template Name: МЕНЮ
*/
?>
<?php get_header(''); ?>
<div id="content">
<h2>МЕНЮ</h2>
<h3><a name="snacks">Холодні закуски</a></h3>
<?php
	$args = array(
		'post_type' => 'snacks',
		'order'     => 'ASC',
		);
			$snacks = new WP_Query( $args );
				if( $snacks->have_posts() ) {
						while( $snacks->have_posts() ) {
                $snacks->the_post();
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
			echo 'Not found';
		}
	?>
<h3><a name="hotsnacks">Гарячі закуски</a></h3>
<?php
	$args = array(
		'post_type' => 'hotsnacks',
		'order'     => 'ASC',
		);
			$hotsnacks = new WP_Query( $args );
				if( $hotsnacks->have_posts() ) {
						while( $hotsnacks->have_posts() ) {
                $hotsnacks->the_post();
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
			echo 'Not found';
		}
	?>
<h3><a name="salads">Салати</a></h3>
<?php
	$args = array(
		'post_type' => 'salads',
		'order'     => 'ASC',
		);
			$salads = new WP_Query( $args );
				if( $salads->have_posts() ) {
						while( $salads->have_posts() ) {
                $salads->the_post();
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
			echo 'Not found';
		}
	?>
<h3><a name="meat">М’ясні страви</a></h3>
<?php
	$args = array(
		'post_type' => 'meat',
		'order'     => 'ASC',
		);
			$meat = new WP_Query( $args );
				if( $meat->have_posts() ) {
						while( $meat->have_posts() ) {
                $meat->the_post();
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
			echo 'Not found';
		}
	?>
<h3><a name="fish">Рибні страви</a></h3>
<?php
	$args = array(
		'post_type' => 'fish',
		'order'     => 'ASC',
		);
			$fish = new WP_Query( $args );
				if( $fish->have_posts() ) {
						while( $fish->have_posts() ) {
                $fish->the_post();
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
			echo 'Not found';
		}
	?>
<h3><a name="first">Перші страви</a></h3>
<?php
	$args = array(
		'post_type' => 'first',
		'order'     => 'ASC',
		);
			$first = new WP_Query( $args );
				if( $first->have_posts() ) {
						while( $first->have_posts() ) {
                $first->the_post();
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
			echo 'Not found';
		}
	?>	
<h3><a name="garnish">Гарніри</a></h3>
<?php
	$args = array(
		'post_type' => 'garnish',
		'order'     => 'ASC',
		);
			$garnish = new WP_Query( $args );
				if( $garnish->have_posts() ) {
						while( $garnish->have_posts() ) {
                $garnish->the_post();
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
			echo 'Not found';
		}
	?>	
<h3><a name="banquet">Банкетні страви</a></h3>
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
			echo 'Not found';
		}
	?>
<h3><a name="desserts">Десерти</a></h3>
<?php
	$args = array(
		'post_type' => 'desserts',
		'order'     => 'ASC',
		);
			$desserts = new WP_Query( $args );
				if( $desserts->have_posts() ) {
						while( $desserts->have_posts() ) {
                $desserts->the_post();
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
			echo 'Not found';
		}
	?>
<h3><a name="alcohol">Алкогольні напої</a></h3>
<?php
	$args = array(
		'post_type' => 'alcohol',
		'order'     => 'ASC',
		);
			$alcohol = new WP_Query( $args );
				if( $alcohol->have_posts() ) {
						while( $alcohol->have_posts() ) {
                $alcohol->the_post();
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
			echo 'Not found';
		}
	?>
<h3><a name="fobeer">До пива</a></h3>
<?php
	$args = array(
		'post_type' => 'fobeer',
		'order'     => 'ASC',
		);
			$fobeer = new WP_Query( $args );
				if( $fobeer->have_posts() ) {
						while( $fobeer->have_posts() ) {
                $fobeer->the_post();
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
			echo 'Not found';
		}
	?>
<h3><a name="drink">Напої</a></h3>
<?php
	$args = array(
		'post_type' => 'drink',
		'order'     => 'ASC',
		);
			$drink = new WP_Query( $args );
				if( $drink->have_posts() ) {
						while( $drink->have_posts() ) {
                $drink->the_post();
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
			echo 'Not found';
		}
	?>	
</div>		
   
<?php get_footer(''); ?>