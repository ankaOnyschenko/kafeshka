<?php
/*
	Template Name: Головна
*/
?>
<?php get_header(''); ?>
   <div id="content" class="home">
			<div class="welcome">
                <h2>ЗАПРОШУЄМО</h2> 
				<h2>до нашого кафе <span class="nameCafe"><?php bloginfo('name'); ?></span></h2>
                <p>Завжди смачна кава: <span>чорна кава до прємного романтичного вечора, або кухоль пива до теплої розмови з друзями</span></p>
				<a class="btn btn-default btn-danger" href="<?php echo get_the_permalink(17); ?>">Далі &gt;&gt;</a>
            </div>
            <div class="services">
                <h2>НАШІ <span class="nameCafe">ПОСЛУГИ</span></h2>
                <p>Плануєте провести річницю весілля, день народження, корпоративну подію або відзначити іншу знаменну дату? <span>Замовте послугу!</span></p>
				<a class="btn btn-default btn-danger" href="<?php echo get_the_permalink(14); ?>">Далі &gt;&gt;</a>
            </div>
            <div class="about">
                <h2>ПРО <span class="nameCafe">НАС</span></h2> 

				<ul>
                    <li><?php bloginfo('name'); ?></li>
                    <li>м. Черкаси, вул. Волкова, 71</li>
                    <li>Телефон (0472) 72-01-45  </li>
                    <li>Пн.-пт.: 11:00-23:00,</li>
                    <li>cб.-нд.: 11:00-23:00</li>  
					<li><a class="btn btn-default btn-danger" href="<?php echo get_permalink(20); ?>">Далі &gt;&gt;</a></li> 
                </ul>	
			</div>	
	</div>
<?php get_sidebar(''); ?>
<?php get_footer(''); ?>