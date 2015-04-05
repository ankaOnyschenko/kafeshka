<?php
/*
	Template Name: Наші послуги
*/
?>
<?php get_header(''); ?>
		<div id="content">
			<h2>НАШІ ПОСЛУГИ</h2>
			<img src="<?php bloginfo('template_url') ?>/images/serv.jpg" alt="picture services" class="serv" />
			<p>Відсвяткуйте Ваше наступне свято, або просто проведіть діловий обід, зустріч давніх друзів, день народження, ювілей, річницю весілля, 
			корпоратив, дитяче свято, або іншу знаменну дату в банкетному залі "<?php bloginfo('name'); ?>" і тут Ви насолодитеся вишуканою кухнею, а ми Вам допоможемо 
			в організація свята будь-якого значення на будь якому етапі від прикрашання залу до підбору індивідуального меню.</p>
			<p>До ваших послуг різні сервіси, зателефонуйте до нас та дізнайтесь про всі подробиці які Вас цікавлять.</p>
			<p>Телефонуйте, пишіть і замовляйте і Ви проведете незабутній час!</p>
			<p>Пропонуємо готовий перелік страв, або оберіть самостійно з меню.</p>
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