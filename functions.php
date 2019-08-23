<?php 
// Scripts
function charger_test_scripts() {

	wp_enqueue_style( 'charger-style', get_stylesheet_uri() );
	//main style.css file

	wp_enqueue_style( 'charger-gfonts', 'https://fonts.googleapis.com/css?family=Playfair+Display&display=swap&subset=cyrillic' );
	//google font from other site

	wp_enqueue_style( 'charger-fontPlayfairDisplay', 
	get_template_directory_uri() . '/fonts/PlayfairDisplay/PlayfairDisplay.css' );

	wp_enqueue_style( 'charger-fontProximaNova', 
	get_template_directory_uri() . '/fonts/ProximaNova/ProximaNova.css' );
	//local files in fonts dir

	wp_enqueue_style( 'charger-owlCarouselMain', 
	get_template_directory_uri() . '/libs/OwlCarousel2/owl.carousel.min.css' );

	wp_enqueue_style( 'charger-owlCarouselThemeTop', 
	get_template_directory_uri() . '/libs/OwlCarousel2/owl.theme-top.default.css' );

	wp_enqueue_style( 'charger-owlCarouselThemeBottom', 
	get_template_directory_uri() . '/libs/OwlCarousel2/owl.theme-bottom.default.css' );

	//local files from lib owlCarousel


	wp_enqueue_script( 
		'jQuery', 
		get_template_directory_uri() . '/libs/jquery/jQuery.3.4.1.js',
		array(), 
		'', 
		true );

	wp_enqueue_script( 
		'OwlCarousel2', 
		get_template_directory_uri() . '/libs/OwlCarousel2/owl.carousel.min.js',
		array('jQuery'), /* от чего зависит скрипт */
		'', 
		true );

	wp_enqueue_script( 
		'MainJS', 
		get_template_directory_uri() . '/js/main.js',
		array('jQuery', 'OwlCarousel2'), /* от чего зависит скрипт */
		'', 
		true );	
}
add_action( 'wp_enqueue_scripts', 'charger_test_scripts' );

//путь к дирректории, применил в js файле navText owlthemebottom стрелки
add_action( 'wp_enqueue_scripts', 'slider_arrows', 99 );
function slider_arrows(){
  wp_localize_script( 'jQuery', 'mytheme', array( 
    'template_url' => get_template_directory_uri(), 
  ) );
}

/*Кастомный тип постов в main-screen */
add_action('init', 'my_custom_init');
function my_custom_init(){
	$cptArgsArray =	array(
		'labels'             => array(
			'name'               => 'Слоганы', // Основное название типа записи
			'singular_name'      => 'Слоган', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый слоган',
			'edit_item'          => 'Редактировать слоган',
			'new_item'           => 'Новый слоган',
			'view_item'          => 'Посмотреть слоган',
			'search_items'       => 'Найти слоган',
			'not_found'          =>  'Слоганов не найдено',
			'not_found_in_trash' => 'В корзине не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Слоганы'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array(
										'title',
										// 'editor',
										// 'author',
										// 'thumbnail',
										// 'excerpt',
										'comments'
									));  

	register_post_type('slogan', $cptArgsArray);
}

/*Кастомный тип постов в нижний слайдер */
add_action('init', 'my_custom_init2');
function my_custom_init2(){
	$cptArgsArray =	array(
		'labels'             => array(
			'name'               => 'Отзывы', // Основное название типа записи
			'singular_name'      => 'Отзыв', // отдельное название записи типа Book
			'add_new'            => 'Добавить Отзыв',
			'add_new_item'       => 'Добавить новый Отзыв',
			'edit_item'          => 'Редактировать Отзыв',
			'new_item'           => 'Новый Отзыв',
			'view_item'          => 'Посмотреть Отзыв',
			'search_items'       => 'Найти Отзыв',
			'not_found'          =>  'Отзывов не найдено',
			'not_found_in_trash' => 'В корзине не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Отзывы'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array(
										'title',
										// 'editor',
										'author'
										// 'thumbnail',
										// 'excerpt',
										// 'comments'
									));  

	register_post_type('testimonials_review', $cptArgsArray);
}
/* Поддержка превью для постов */
add_theme_support( 'post-thumbnails' );

if (function_exists('add_image_size')) {
	add_image_size('slider-img', 500, 300, true);
	//add_image_size(идентификатор, ширина, высота, обрезать картинку)
}