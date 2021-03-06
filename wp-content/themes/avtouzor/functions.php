<?php
/**
 * avtouzor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package avtouzor
 */

if ( ! function_exists( 'avtouzor_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function avtouzor_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on avtouzor, use a find and replace
		 * to change 'avtouzor' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'avtouzor', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'avtouzor' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'avtouzor_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'avtouzor_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function avtouzor_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'avtouzor_content_width', 640 );
}
add_action( 'after_setup_theme', 'avtouzor_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function avtouzor_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'avtouzor' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'avtouzor' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'avtouzor_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function avtouzor_scripts() {
	
	/*
   * Подключаем стили:
   * Аргументы:
   * 1) название стиля (может быть любым)
   * 2) путь к файлу
   */
	// для локальных стилей
	wp_enqueue_style( 'avtouzor-jq-style', get_template_directory_uri() . '/assets/css/jquery.fancybox.css' );
	
	wp_enqueue_style( 'avtouzor-styles', get_template_directory_uri() . '/assets/css/style.css' );
	
//	wp_enqueue_style( 'avtouzor-style', get_stylesheet_uri() );

//	wp_enqueue_script( 'avtouzor-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

//	wp_enqueue_script( 'avtouzor-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
	// для внешних стилей
	//wp_enqueue_style( 'artcraft-style', 'http://domain.com/style.css' );
	/*
	 * Подключаем скрипты:
	 * Аргументы:
	 * 1) название скрипта (может быть любым)
	 * 2) путь к файлу
	 * 3) после каких скриптов подгружать (лучше указать пустой массив
	 * 4) версия (оставляем пустые кавычки)
	 * 5) подключение в футере (true = да, false = нет)
	 */
	wp_enqueue_script( 'avtouzor-js-jq', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', [], '', true );
	wp_enqueue_script( 'avtouzor-js-input_mask', get_template_directory_uri() . '/assets/js/jquery.inputmask.bundle.js', [], '', true );
	wp_enqueue_script( 'avtouzor-js-phone', get_template_directory_uri() . '/assets/js/phone.js', [], '', true );
	wp_enqueue_script( 'avtouzor-js-phone_ru', get_template_directory_uri() . '/assets/js/phone-ru.js', [], '', true );
	wp_enqueue_script( 'avtouzor-jq-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', [], '', true );
	wp_enqueue_script( 'avtouzor-js_script', get_template_directory_uri() . '/assets/js/script.js', [], '', true );
	wp_enqueue_script( 'avtouzor-js_script_form', get_template_directory_uri() . '/js/script_form.js', [], '', true );
	
	/*
    * Добавляем возможность отправлять AJAX-запросы к скриптам
    * Аргументы:
    * 1) название скрипта, в котором будем писать ajax
    * 2) название объекта, к которому будем обращаться в файле скрипта
    * 3) элементы объекта, которые нам нужны (путь к обработчику аякса, путь к папке темы)
    */
	wp_localize_script( 'avtouzor-js_script_form', 'myajax',
		[
			'url' => admin_url( 'admin-ajax.php' ),
			'template' => get_template_directory_uri()
		]
	);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	
}
add_action( 'wp_enqueue_scripts', 'avtouzor_scripts' );

function pss_disable_emoji() {
	
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
}
add_action( 'init', 'pss_disable_emoji' );
function pss_disable_css_head() {
	remove_action( 'wp_head','rsd_link' );
	remove_action( 'wp_head','wlwmanifest_link' );
	remove_action( 'wp_head','wp_generator' );
	wp_dequeue_style( 'fw-ext-builder-frontend-grid-css' );
}
add_action( 'init', 'pss_disable_css_head' );
/**
 * Load custom functions
 */
require get_template_directory() . '/includes/custom-functions.php';

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

