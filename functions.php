<?php
/**
 * Soluzioni di casa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Soluzioni_di_casa
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function soluzioni_di_casa_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Soluzioni di casa, use a find and replace
		* to change 'soluzioni-di-casa' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'soluzioni-di-casa', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'soluzioni-di-casa' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'soluzioni_di_casa_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'soluzioni_di_casa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function soluzioni_di_casa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'soluzioni_di_casa_content_width', 640 );
}
add_action( 'after_setup_theme', 'soluzioni_di_casa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function soluzioni_di_casa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'soluzioni-di-casa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'soluzioni-di-casa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'soluzioni_di_casa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function soluzioni_di_casa_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/src/dist/css/style.css', false, '1.1', 'all');
	wp_style_add_data( 'style', 'rtl', 'replace' );
	wp_enqueue_style( 'default_style', get_template_directory_uri() . '/style.css', false, '1.1', 'all');
	wp_style_add_data( 'default_style', 'rtl', 'replace' );

	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/src/dist/js/app.min.js', false, '1.1', true );
}
add_action( 'wp_enqueue_scripts', 'soluzioni_di_casa_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function mytheme_customize_register( $wp_customize ) {
/*
Добавляем секцию в настройки темы
*/
  $wp_customize->add_section(
      // ID
      'data_sale_section',
      // Arguments array
      array(
          'title' => 'Поля шапки и подвала',
          'capability' => 'edit_theme_options',
          'description' => "Тут можно настройки блока"
      )
  );
/*
Добавляем поле телефона site_telephone
*/
  $wp_customize->add_setting(
      // ID
      'adr1',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'adr1_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Адрес 1",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'adr1'
      )
  );
  $wp_customize->add_setting(
      // ID
      'adr2',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'adr2_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Адрес 2",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'adr2'
      )
  );
  $wp_customize->add_setting(
      // ID
      'work',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'work_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Режим работы",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'work'
      )
  );
  $wp_customize->add_setting(
      // ID
      'tel',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'tel_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Телефон",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'tel'
      )
  );
  $wp_customize->add_setting(
      // ID
      'inst',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'inst_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Ссылка на Instagram",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'inst'
      )
  );
  $wp_customize->add_setting(
      // ID
      'vk',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'vk_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Ссылка на ВКонтакте",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'vk'
      )
  );
  $wp_customize->add_setting(
      // ID
      'tg',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'tg_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Ссылка на Telegram",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'tg'
      )
  );
  $wp_customize->add_setting(
      // ID
      'wa',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'wa_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Ссылка на Whatsapp",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'wa'
      )
  );
  $wp_customize->add_setting(
      // ID
      'rat_yan',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'rat_yan_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Рейтинг Яндекса",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'rat_yan'
      )
  );
  $wp_customize->add_setting(
      // ID
      'rat_gis',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'rat_gis_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Рейтинг 2GIS",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'rat_gis'
      )
  );
  $wp_customize->add_setting(
      // ID
      'copy',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'copy_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Копирайт",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'copy'
      )
  );
  $wp_customize->add_setting(
      // ID
      'politic',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'politic_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Ссылка на политику конфиденциальности",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'politic'
      )
  );
}
add_action( 'customize_register', 'mytheme_customize_register' );










add_action( 'init', 'true_register_post_type_init' );

function true_register_post_type_init() {
 
	$services_labels = array(
		'name' => 'Питомцы',
		'singular_name' => 'Питомец',
		'add_new' => 'Добавить Питомца',
		'add_new_item' => 'Добавить Питомца',
		'edit_item' => 'Редактировать Питомца',
		'new_item' => 'Новый Питомц',
		'all_items' => 'Все Питомцы',
		'search_items' => 'Искать Питомцев',
		'not_found' =>  'Питомцы по заданным критериям не найдено.',
		'not_found_in_trash' => 'В корзине нет Питомцев.',
		'menu_name' => 'Питомцы'
	);
 
	$services_args = array(
		'labels' => $services_labels,
		'public' => true,
		'publicly_queryable' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-star-filled',
		'menu_position' => 3,
		'template' => 'wp_pet.php',
		'supports' => array( 'title' )
	);
 
	register_post_type( 'services', $services_args );
}


