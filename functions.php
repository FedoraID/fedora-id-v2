<?php
/**
 * Fedora Indonesia V2 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fedora_Indonesia_V2
 */

if ( ! function_exists( 'fedora_id_v2_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fedora_id_v2_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Fedora Indonesia V2, use a find and replace
	 * to change 'fedora-id-v2' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'fedora-id-v2', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'fedora-id-v2' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'fedora_id_v2_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'fedora_id_v2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fedora_id_v2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fedora_id_v2_content_width', 640 );
}
add_action( 'after_setup_theme', 'fedora_id_v2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fedora_id_v2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fedora-id-v2' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fedora-id-v2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fedora_id_v2_widgets_init' );

function my_new_contactmethods( $contactmethods ) {
	// Add Twitter
	$contactmethods['twitter'] = 'Twitter';
	//add Facebook
	$contactmethods['facebook'] = 'Facebook';
	//add Github
	$contactmethods['github'] = 'Github';

	return $contactmethods;
}

add_filter('user_contactmethods','my_new_contactmethods',10,1);

/**
 * Add Search Form support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

//function to sort array by filed
function authors_orderBy($data, $field){
	 $code = "if (\$a['$field'] == \$b['$field']) {return 0;} return (\$a['$field'] < \$b['$field']) ? 1 : -1;";
	 usort($data, create_function('$a,$b', $code));
	 return $data;
}


/**
 * Enqueue scripts and styles.
 */
function fedora_id_v2_scripts() {
	wp_enqueue_style( 'fedora-id-v2-style', get_stylesheet_uri() );

	// ================ // CSS // ================ //

	// BOOTSTRAP CORE
	wp_register_style('bootstrapCSS', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('bootstrapCSS');

	// FONTAWESOME
	wp_register_style('fontawesomeCSS', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style('fontawesomeCSS');

	// LINUXICON
	wp_register_style('linuxiconCSS', get_template_directory_uri() . '/assets/css/font-linux.css');
	wp_enqueue_style('linuxiconCSS');

	// CUSTOM
	wp_register_style('custom-style', get_template_directory_uri() . '/assets/css/fedora.min.css');
	wp_enqueue_style('custom-style');

	// GOOGLE FONT
	wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700');
	wp_enqueue_style( 'googleFonts');
	wp_register_style('googleFonts2', 'https://fonts.googleapis.com/css?family=Lato:400,300,700');
	wp_enqueue_style( 'googleFonts2');


	// ================ // JAVASCRIPT // ================ //

	// JQUERY
	wp_enqueue_script("jquery");

	// BOOTSTRAP JS
	wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrapNpmJS', get_template_directory_uri() . '/assets/js/npm.js', array(), '20151215', true );
	wp_enqueue_script( 'customJS', get_template_directory_uri() . '/assets/js/fedora.js', array(), '20151215', true );

	// LINE JS
	wp_enqueue_script( 'lineJS', get_template_directory_uri() . '/assets/js/loader.min.js', array(), '20151215', true );
	wp_enqueue_script( 'lineMobileJS', get_template_directory_uri() . '/assets/js/line-button.js', array(), '20140411', true );

	// _S JS
	wp_enqueue_script( 'fedora-id-v2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'fedora-id-v2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fedora_id_v2_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
