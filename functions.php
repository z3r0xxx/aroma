<?php
/**
 * Aroma functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aroma
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'aroma_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aroma_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Aroma, use a find and replace
		 * to change 'aroma' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'aroma', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'aroma' ),
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
				'aroma_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'aroma_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aroma_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aroma_content_width', 640 );
}
add_action( 'after_setup_theme', 'aroma_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */
function aroma_scripts() {
	wp_enqueue_style( 'aroma-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'aroma-style', 'rtl', 'replace' );

	wp_enqueue_script( 'aroma-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aroma_scripts' );

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

// ?????????????????? ???????????? ?????????????????? <li>
add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
function filter_nav_menu_css_classes( $classes, $item, $args, $depth ) {
	$classes = ['nav-item'];

	if ( $item->current ) {
		$classes[] .= ' active';
	}

	return $classes;
}

// ?????????????????? ???????????? ?????????????????? <a>
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
	$atts['class'] = 'nav-link';
    return $atts;
}

// ???????????????????? ???????????? ???????????????????? ?????????? ?? ??????????????
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // ?????????? ???????????????????????? ???????? ?????? ???? ?????????? ??????????????
function theme_name_scripts() {
	wp_enqueue_style( 'style-name', 'css/style.css' );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

function woocommerce_product_category( $args = array() ) {
    $woocommerce_category_id = get_queried_object_id();
	$args = array(
		'parent' => $woocommerce_category_id
	);
	$terms = get_terms( 'product_cat', $args );
	if ( $terms ) {
		echo '<ul class="woocommerce-categories">';
		foreach ( $terms as $term ) {
			echo '<li class="woocommerce-product-category-page">';
				woocommerce_subcategory_thumbnail( $term );
			echo '<h2>';
			echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
			echo $term->name;
			echo '</a>';
			echo '</h2>';
			echo '</li>';
		}
		echo '</ul>';
	}
}
add_action( 'woocommerce_before_shop_loop', 'woocommerce_product_category', 100 );