<?php
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-fields' );
	add_action( 'init', 'create_post_type' );


	function create_post_type() {
	register_post_type( 'snacks',
		array(
			'labels' => array(
				'name' => __( 'Холодні закуски' ),
				'singular_name' => __( 'snacks' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'custom-fields')
		)
	);
	register_post_type( 'hotsnacks',
		array(
			'labels' => array(
				'name' => __( 'Гарячі закуски' ),
				'singular_name' => __( 'hotsnacks' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'custom-fields')
		)
	);

	register_post_type( 'salads',
		array(
			'labels' => array(
				'name' => __( 'Салати' ),
				'singular_name' => __( 'salads' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'custom-fields')
		)
	);	
	register_post_type( 'meat',
		array(
			'labels' => array(
				'name' => __( 'Мясні страви' ),
				'singular_name' => __( 'meat' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'custom-fields')
		)
	);	
	register_post_type( 'fish',
		array(
			'labels' => array(
				'name' => __( 'Рибні страви' ),
				'singular_name' => __( 'fish' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'custom-fields')
		)
	);
	register_post_type( 'first',
		array(
			'labels' => array(
				'name' => __( 'Перші страви' ),
				'singular_name' => __( 'first' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'custom-fields')
		)
	);
	register_post_type( 'garnish',
		array(
			'labels' => array(
				'name' => __( 'Гарніри' ),
				'singular_name' => __( 'garnish' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'custom-fields')
		)
	);
	register_post_type( 'banquet',
		array(
			'labels' => array(
				'name' => __( 'Банкетні страви' ),
				'singular_name' => __( 'banquet' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'custom-fields')
		)
	);
	register_post_type( 'desserts',
		array(
			'labels' => array(
				'name' => __( 'Десерти' ),
				'singular_name' => __( 'desserts' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'custom-fields')
		)
	);
	register_post_type( 'alcohol',
		array(
			'labels' => array(
				'name' => __( 'Алкогольні напої' ),
				'singular_name' => __( 'alcohol' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'custom-fields')
		)
	);
	register_post_type( 'fobeer',
		array(
			'labels' => array(
				'name' => __( 'До пива' ),
				'singular_name' => __( 'fobeer' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'custom-fields')
		)
	);
	register_post_type( 'drink',
		array(
			'labels' => array(
				'name' => __( 'Напої' ),
				'singular_name' => __( 'drink' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'custom-fields')
		)
	);	
	
}



	register_sidebar (array(
		'name' => 'pole',
		'id' => 'sidebar',
		'description' => 'поле',
	));
	
		register_sidebar (array(
		'name' => 'pole2',
		'id' => 'about',
		'description' => 'поле2',
	));
	
	
if (function_exists("_p2p_load")) {
function vp_post_to_post()
{
p2p_register_connection_type(array(
'name' => 'snacks_to_hotsnacks',
'from' => 'snacks',
'to' => 'hotsnacks'
));
}
 
add_action('p2p_init', 'vp_post_to_post');
}

