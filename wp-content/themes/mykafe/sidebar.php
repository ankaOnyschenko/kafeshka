<div id="sidebar">
		<h2><span class="nameCafe">МЕНЮ</span></h2>
		<img src="<?php bloginfo('template_url') ?>/images/vilka.png" alt="picture menu" class="food" />
		<p><a href="<?php echo get_the_permalink(11); ?>#snacks" >Холодні закуски</a></p>
		<p><a href="<?php echo get_the_permalink(11); ?>#hotsnacks" >Гарячі закуски</a></p>
		<p><a href="<?php echo get_the_permalink(11); ?>#salads" >Салати</a></p>
		<p><a href="<?php echo get_the_permalink(11); ?>#meat" >М’ясні страви</a></p>
		<p><a href="<?php echo get_the_permalink(11); ?>#fish" >Рибні страви</a></p>
		<p><a href="<?php echo get_the_permalink(11); ?>#first" >Перші страви</a></p>
		<p><a href="<?php echo get_the_permalink(11); ?>#garnish" >Гарніри</a></p>
		<p><a href="<?php echo get_the_permalink(11); ?>#banquet" >Банкетні страви</a></p>
		<p><a href="<?php echo get_the_permalink(11); ?>#desserts" >Десерти</a></p>
		<p><a href="<?php echo get_the_permalink(11); ?>#alcohol" >Алкогольні напої</a></p>
		<p><a href="<?php echo get_the_permalink(11); ?>#fobeer" >До пива</a></p>
		<p><a href="<?php echo get_the_permalink(11); ?>#drink" >Напої</a></p>
		<div class="map"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar") ) : ?>
<?php endif; ?>
		</div>
</div>