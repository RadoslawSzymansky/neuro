<?php
if ( ! function_exists( 'basic_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function basic_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on basic, use a find and replace
		 * to change 'basic' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'basic', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'basic' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */

	}
endif;
add_action( 'after_setup_theme', 'basic_setup' );

/**
 * Enqueue scripts and styles.
 */
function basic_scripts() {
	wp_enqueue_style( 'basic-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'basic_scripts' );

//  PAGE OPTIONS ADD
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Opcje strony',
		'menu_title'	=> 'Opcje strony',
	));

}


function get_breadcrumb() { 
	global $post; 
	?>
	 <div class="breadcrump">
		<?php
		echo '<a href="'.home_url().'" rel="nofollow">Strona Główna</a>'; 
		if (is_singular( 'oferta' )){ 
		echo ' <span></span> '; 
		echo '<a href="'. get_home_url() .'/oferta">Oferta</a>'; 
		echo ' <span></span> '; 
		echo '<a class="end">' . get_the_title() . '</a>'; 
		} elseif (is_page()) { 
		if($post->post_parent != 0) { 
		echo ' <span>></span> ' . '<a href="'. get_the_permalink( $post->post_parent ) .'">'. get_the_title( $post->post_parent ) . '</a>'; 
		} 
		echo ' <span>></span> '; 
		echo '<a class="end">' . get_the_title() . '</a>'; 
		} ?>
	</div>
	<?php
  }

add_shortcode('show_breadcrumb', 'get_breadcrumb');

add_filter( 'pll_the_languages_args', function( $args ) { $args['display_names_as'] = 'slug'; return $args; } );