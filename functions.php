<?php
/**
 * TukiOne functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TukiOne
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'tukione_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tukione_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on TukiOne, use a find and replace
		 * to change 'tukione' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tukione', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'tukione' ),
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
				'tukione_custom_background_args',
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
add_action( 'after_setup_theme', 'tukione_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tukione_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tukione_content_width', 640 );
}
add_action( 'after_setup_theme', 'tukione_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tukione_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar-1', 'tukione' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tukione' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s trending-posts">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar for Archive 1', 'tukione' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'tukione' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar for Archive 2', 'tukione' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'tukione' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar', 'tukione' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add Footer text here.', 'tukione' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s footer-col -about">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 2', 'tukione' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widget here.', 'tukione' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s feature-post-block">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 3.1', 'tukione' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widget here.', 'tukione' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s tags-group">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 3.2', 'tukione' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add Your Social link here.', 'tukione' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s social-block">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'tukione_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tukione_scripts() {
	wp_enqueue_style( 'tukione-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'tukione-elegant', get_template_directory_uri() . '/assets/css/elegant.css', array(), _S_VERSION);
    wp_enqueue_style( 'tukione-custom-bootstrap', get_template_directory_uri() . '/assets/css/custom_bootstrap.css', array(), _S_VERSION);
    wp_enqueue_style( 'tukione-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), _S_VERSION);
    wp_enqueue_style( 'tukione-plyr', get_template_directory_uri() . '/assets/css/plyr.min.css', array(), _S_VERSION);
    wp_enqueue_style( 'tukione-main', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
    wp_enqueue_style( 'tukione-icon', 'https://kit-pro.fontawesome.com/releases/v5.13.0/css/pro.min.css', array(), _S_VERSION);
	wp_style_add_data( 'tukione-style', 'rtl', 'replace' );

	wp_enqueue_script( 'tukione-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'tukione-load', get_template_directory_uri() . '/js/ajaxLoadMore.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'tukione-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'tukione-plyr', get_template_directory_uri() . '/assets/js/plyr.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'tukione-masonary', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'tukione-imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'tukione-vimeo', get_template_directory_uri() . '/assets/js/vimeo.player.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'tukione-main', get_template_directory_uri() . '/assets/js/main.js', array("jquery"), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tukione_scripts' );

// <script rel="script/javascript" src="assets/js/slick.min.js"></script>
// <script rel="script/javascript" src="assets/js/plyr.min.js"></script>
// <script rel="script/javascript" src="assets/js/masonry.pkgd.min.js"></script>
// <script rel="script/javascript" src="assets/js/imagesloaded.pkgd.min.js"></script>
// <script rel="script/javascript" src="assets/js/vimeo.player.min.js"></script>
// <script rel="script/javascript" src="assets/js/main.js"></script>



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
 * Customizer additions.
 */
require get_template_directory() . '/inc/tukione-comments.php';
/**
 * use Plugin-installer.
 */
require get_template_directory() . '/inc/Plugin-installer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Get current year with shortcode.
 */
function currentYear($atts){
    return date('Y');
}
add_shortcode( 'year', 'currentYear' );


//Add "active" class to wp_nav_menu() current menu item.
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}


//load more button
function tukione_pagination() {

    global $wp_query;
    
    if ( $wp_query->max_num_pages <= 1 ) return; 
    
    $big = 999999999; // need an unlikely integer
    
    $pages = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'prev_text'          => __( '<' ),
            'next_text'          => __( '>' ),
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'type'  => 'array',
        ) );
        if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<div class="pagination center"><ul>';
            foreach ( $pages as $page ) {
                    echo "<li>$page</li>";
            }
           echo '</ul></div>';
            }
    }