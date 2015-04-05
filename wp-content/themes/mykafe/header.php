<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kafe</title>
<link href="<?php bloginfo('template_url') ?>/css/bootstrap.css"  type="text/css" rel="stylesheet" />
<link href="<?php bloginfo('template_url') ?>/style.css" type="text/css" rel="stylesheet" />
	<?php wp_head(); ?>
</head>

<body>
<div id="wrapper">
	<div id="header">
				<span class="slogan">ПРОВЕДИ ГАРНО ЧАС</span>
				<div class="hed">
				<div class="name"><h1><a href="/"><?php bloginfo('name'); ?></a></h1></div>
				<div class="logo"><div id="my_carousel" class="carousel slide pull-left">
					<ol class="carousel-indicators">
    					<li data-target="#my_carousel" data-slide-to="0"></li>
    					<li data-target="#my_carousel" data-slide-to="1" class="active"></li>
    					<li data-target="#my_carousel" data-slide-to="2"></li>
						<li data-target="#my_carousel" data-slide-to="3"></li>
    					<li data-target="#my_carousel" data-slide-to="4"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item">
							<img src="<?php bloginfo('template_url') ?>/images/food1.jpg" alt="slider pictures" />
						</div>
						<div class="item active">
							<img src="<?php bloginfo('template_url') ?>/images/food2.jpg" alt="slider pictures" />
						</div>
						<div class="item">
							<img src="<?php bloginfo('template_url') ?>/images/food3.jpg" alt="slider pictures" />
						</div>	
						<div class="item">
							<img src="<?php bloginfo('template_url') ?>/images/food4.jpg" alt="slider pictures" />
						</div>
						<div class="item">
							<img src="<?php bloginfo('template_url') ?>/images/food5.png" alt="slider pictures" />
						</div>					
					</div></div>

					</div>
                <ul class="menu">
                                
						<?php wp_nav_menu(array(
								'theme_location'  => 'main_menu',
								'menu_class'      => 'header-navigation',
								'container'       => false
								)); ?>
					
                </ul>
				</div>
	</div>