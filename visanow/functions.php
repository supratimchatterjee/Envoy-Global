<?php
/**
 * Visanow functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Visanow
 */

if ( ! function_exists( 'visanow_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function visanow_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Visanow, use a find and replace
	 * to change 'visanow' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'visanow', get_template_directory() . '/languages' );

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
		'top' => esc_html__( 'Top Menu', 'visanow' ),
		'primary' => esc_html__( 'Primary', 'visanow' ),
		'secondary' => esc_html__( 'Secondary', 'visanow' ),
		'visa_resource' => esc_html__( 'Visa Resource', 'visanow' ),
		'news_insights' => esc_html__( 'News Insights', 'visanow' ),
		'footer-menu' => esc_html__( 'footer-menu', 'visanow' ),
		'glossary-menu' => esc_html__( 'glossary-menu', 'visanow' ),
		'specific-menu' => esc_html__( 'specific-menu', 'visanow' ),
		'wok-visa-menu' => esc_html__( 'wok-visa-menu', 'visanow' ),
		'visa-specific-menu' => esc_html__( 'visa-specific-menu', 'visanow' ),
		'404-menu' => esc_html__( '404-menu', 'visanow' ),
		'related-topic' => esc_html__( 'related-topic', 'visanow' ),
		'single-menu' => esc_html__( 'single-menu', 'visanow' ),
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


}
endif;
add_action( 'after_setup_theme', 'visanow_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function visanow_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'visanow_content_width', 640 );
}
add_action( 'after_setup_theme', 'visanow_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function visanow_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'visanow' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'visanow' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Member Sidebar', 'visanow' ),
		'id'            => 'member-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'visanow' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Newsroom Archive Sidebar', 'visanow' ),
		'id'            => 'newsroom_archive_sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'visanow' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Press Release Sidebar', 'visanow' ),
		'id'            => 'press_release_sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'visanow' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'visanow_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function visanow_scripts() {
	#CSS
	wp_enqueue_style('uikit-core-css', get_stylesheet_directory_uri() . '/css/uikit.min.css' );
	wp_enqueue_style('accordion-css', get_stylesheet_directory_uri() . '/css/components/accordion.min.css' );
	wp_enqueue_style('slideshow-css', get_stylesheet_directory_uri() . '/css/components/slideshow.css' );
	wp_enqueue_style('slidenav-css', get_stylesheet_directory_uri() . '/css/components/slidenav.css' );
	wp_enqueue_style('theme-css', get_stylesheet_directory_uri() . '/css/app.css' );
	wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/css/custom.css' );
	wp_enqueue_style('theme-reponsive-css', get_stylesheet_directory_uri() . '/css/responsive.css' );

	#JS
	wp_enqueue_script('uikit-core-js', get_stylesheet_directory_uri() . '/js/uikit.min.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script('matchHeight-js',  get_stylesheet_directory_uri() . '/js/jquery.matchHeight.js', array('jquery'), '0.0.1', true);

	wp_enqueue_script('tab-js', get_stylesheet_directory_uri() . '/js/core/tab.min.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script('lightbox-js', get_stylesheet_directory_uri() . '/js/components/lightbox.min.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script('accordion-js', get_stylesheet_directory_uri() . '/js/components/accordion.min.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script('fitvids-js', get_stylesheet_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script('grid-js', get_stylesheet_directory_uri() . '/js/components/grid.min.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script('isotope-js', get_stylesheet_directory_uri() . '/js/isotope.min.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script('slideset-js', get_stylesheet_directory_uri() . '/js/components/slideset.min.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script('slidesshow-js', get_stylesheet_directory_uri() . '/js/components/slideshow.min.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script('sticky-js', get_stylesheet_directory_uri() . '/js/components/sticky.js', array('jquery'), '0.0.1', true );

	wp_enqueue_script('tweenmax-js', get_stylesheet_directory_uri() . '/js/scrollmagic/minified/plugins/TweenMax.min.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script('scrollmagic-js', get_stylesheet_directory_uri() . '/js/scrollmagic/minified/ScrollMagic.min.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script('gsap-js', get_stylesheet_directory_uri() . '/js/scrollmagic/minified/plugins/animation.gsap.min.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script('indicator-js', get_stylesheet_directory_uri() . '/js/scrollmagic/minified/plugins/debug.addIndicators.min.js', array('jquery'), '0.0.1', true );


	wp_enqueue_script('app-js', get_stylesheet_directory_uri() . '/js/app.js', array('jquery'), '0.0.1', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'visanow_scripts' );


function allow_svgimg_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'allow_svgimg_types');
add_image_size('client_image', 159, 61, true );
add_image_size('gallery-large', 718, 404, true );

/**
 * Register Options Page
 */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


//Latest News Widget

class Letest_News_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		'letest_news_widget', // Base ID
		__('New Press Release Widget', 'text_domain'), // Name
		array( 'description' => __( 'Widget containing Latest News', 'visanow' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {

	echo $args['before_widget'];

	$title = get_field('title_widget', 'widget_' . $this->id); ?>
	<?php $widget_icon = get_field('icon_widget', 'widget_' . $this->id);?>

	<div class="sidebar-module">
					<div class="module-heading uk-flex uk-flex-middle uk-text-left">
						<h5><?php echo $title;?></h5>
						<img class="uk-float-right" src="<?php echo $widget_icon;?>" alt="" data-uk-svg>
					</div>
					<div class="learn-module-text">
						<span class="module-text-heading">NEW Press RELEASE</span>
						  <?php
					$args = array(
						'post_type'         =>        'newsroom_post',
						'posts_per_page'    =>        1

					);

					$query = new WP_Query($args);
					if ($query->have_posts()) :
						while ($query->have_posts()) : $query->the_post();
						$id    =    $query->ID;
					?>
						<a class="uk-display-block uk-margin-bottom" href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($id, array('240','128'));?></a>

							<a href="<?php the_permalink(); ?>"><h6><?php the_title();?></h6></a>
							<span><?php the_time('M, n Y') ?>  |  </span>
							<span class="border"><?php the_author_posts_link(); ?></span>

						  <p><?php echo wp_trim_words( get_the_content(), 10, '' ); ?></p>
						  <a href="<?php the_permalink();?>">READ MORE</a>
						  <?php endwhile; ?>
					<?php endif; wp_reset_query(); ?>

					</div>
				</div>




	<?php


	echo $args['after_widget'];
	}

	public function form( $instance ) {

	}

}

// function register_security_logos_widget should copy in add_action section
// Copy  class name from top and pest it on  register_widget section below

function register_letest_news_widget() {
register_widget( 'Letest_News_Widget' );
}
add_action( 'widgets_init', 'register_letest_news_widget' );


// widget for single twiter section

class single_twiter_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		'single_twiter_widget', // Base ID
		__('New single twiter Widget', 'text_domain'), // Name
		array( 'description' => __( 'Widget containing single twiter', 'visanow' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {

	echo $args['before_widget'];

	$title = get_field('single_twiter_title', 'widget_' . $this->id);
	$icon = get_field('siingle_twitter_icon', 'widget_' . $this->id);
	$username = get_field('username_twitter', 'widget_' . $this->id);
	 ?>

	   <?php $user_name = get_sub_field('user_name');?>
			<?php $tweets = getTweets($username, 1, array("trim_user" => false)); ?>
			<?php $regex = '/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/'; ?>
			 <?php foreach($tweets as $tweet) : ?>
		<div class="sidebar-module">

					<div class="module-heading uk-flex uk-flex-middle uk-text-left">
						<h5><?php echo $title;?></h5>
						<img class="uk-float-right" src="<?php echo $icon;?>" alt="" data-uk-svg>
					</div>
					<div class="tweet-module uk-text-center">
						<div class="news-header uk-text-left uk-clearfix">
							<img src="<?php echo $tweet['user']['profile_image_url']; ?>">

							<div class="news-heading">
								<h6><?php echo $tweet['user']['name'];?></h6>
								<?php $createdat = $tweet['created_at']; ?>
								<span><?php $formattedDate = $newDate = date("M d", strtotime($createdat)); ?></span>
								<a href="#">#visanow</a>
							</div>
						</div>
						<?php $convertedTweet = preg_replace($regex, '<a href="$0" target="_blank" title="$0">$0</a>',  $tweet['text']); ?>
					<?php  $tweetLink = $tweet['entities']['urls'][0]['url']; ?>
						<p class="uk-text-left"><?php echo $convertedTweet; ?></p>
						<span class="st_sharethis" st_title="Share Tweet" st_url='<?php echo $tweetLink; ?>'>Share</span>
					</div>
				</div>
	<?php endforeach; ?>



	<?php


	echo $args['after_widget'];
	}

	public function form( $instance ) {

	}

}

// function register_security_logos_widget should copy in add_action section
// Copy  class name from top and pest it on  register_widget section below

function register_single_twiter_Widget() {
register_widget( 'single_twiter_Widget' );
}
add_action( 'widgets_init', 'register_single_twiter_widget' );

// Newsroom link from back-end
//add_action('admin_menu', 'my_menu_pages', 99);
//function my_menu_pages(){
//	add_menu_page( 'newsroom', 'Newsroom', 'manage_options', 'newsroom-level-handle', 'redirect_newsroom', 'dashicons-format-aside', 6);
//	global $menu;
//	$url = home_url() . '/wp-admin/edit.php?category_name=newsroom';
//	$menu[6][2] = $url;
//    //echo "<pre>", print_r($menu), "</pre>n";
//}
//
//function redirect_newsroom(){
//}

// custom sharethis shortcode
if (function_exists('st_makeEntries')){
add_shortcode('sharethis', 'st_makeEntries');
}


function shareThisUrl($url = 'http://google.com', $title = 'Share This'){
  global $post;
  //$st_json='{"type":"vcount","services":"sharethis,facebook,twitter,email"}';
  $out="";
  $widget = get_option('st_widget');
  $tags = get_option('st_tags');
  if(!empty($widget)){
	if(preg_match('/buttons.js/',$widget)){
	  if(!empty($tags)){
		$tags=preg_replace("/\\\'/","'", $tags);
		$tags=preg_replace("/<\?php the_permalink\(\); \?>/", $url, $tags);
		$tags=preg_replace("/<\?php the_title\(\); \?>/", $title, $tags);
		$tags=preg_replace("/{URL}/",$url, $tags);
		$tags=preg_replace("/{TITLE}/",$title, $tags);
	  }else{
		$tags="<span class='st_sharethis' st_title='".strip_tags($title)."' st_url='".$url."' displayText='ShareThis'></span>";
		$tags="<span class='st_facebook_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='Facebook'></span><span class='st_twitter_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='Twitter'></span><span class='st_email_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='Email'></span><span class='st_sharethis_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='ShareThis'></span><span class='st_fblike_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='Facebook Like'></span><span class='st_plusone_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='Google +1'></span><span class='st_pinterest _buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='Pinterest'></span>";
		$tags=preg_replace("/<\?php the_permalink\(\); \?>/",$url, $tags);
		$tags=preg_replace("/<\?php the_title\(\); \?>/",strip_tags($title), $tags);
	  }
	  $out=$tags;
	}else{
	  $out = '<script type="text/javascript">SHARETHIS.addEntry({ title: "'.strip_tags($title).'", url: "'.$url.'" });</script>';
	}
  }
  return $out;
}


function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');



// Tweet this shortcode



function tweet_shortcode( $atts, $content = null ) {
	$tweetLink = 'https://twitter.com/intent/tweet?text=' . urlencode($content);
	return '<div class="immigration-tweet uk-text-center uk-container-center"><p>' . $content . '</p><a href="' . $tweetLink . '"><span>tweet this</span><i class="fa fa-twitter" aria-hidden="true"></i></a></div>';
}
add_shortcode( 'tweet', 'tweet_shortcode' );


function custom_rewrite_rule(){

	// Add day archive (and pagination)
	add_rewrite_rule("about_us/newsroom/([0-9]{4})/([0-9]{2})/([0-9]{2})/page/?([0-9]{1,})/?",'index.php?post_type=newsroom_post&year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]','top');
	add_rewrite_rule("about_us/newsroom/([0-9]{4})/([0-9]{2})/([0-9]{2})/?",'index.php?post_type=newsroom_post&year=$matches[1]&monthnum=$matches[2]&day=$matches[3]','top');

	// Add month archive (and pagination)
	add_rewrite_rule("about_us/newsroom/([0-9]{4})/([0-9]{2})/page/?([0-9]{1,})/?",'index.php?post_type=newsroom_post&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]','top');
	add_rewrite_rule("about_us/newsroom/([0-9]{4})/([0-9]{2})/?",'index.php?post_type=newsroom_post&year=$matches[1]&monthnum=$matches[2]','top');

	// Add year archive (and pagination)
	add_rewrite_rule("about_us/newsroom/([0-9]{4})/page/?([0-9]{1,})/?",'index.php?post_type=newsroom_post&year=$matches[1]&paged=$matches[2]','top');
	add_rewrite_rule("about_us/newsroom/([0-9]{4})/?",'index.php?post_type=newsroom_post&year=$matches[1]','top');


	// Add day archive (and pagination)
	add_rewrite_rule("about_us/press_releases/([0-9]{4})/([0-9]{2})/([0-9]{2})/page/?([0-9]{1,})/?",'index.php?post_type=press_releases&year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]','top');
	add_rewrite_rule("about_us/press_releases/([0-9]{4})/([0-9]{2})/([0-9]{2})/?",'index.php?post_type=press_releases&year=$matches[1]&monthnum=$matches[2]&day=$matches[3]','top');

	// Add month archive (and pagination)
	add_rewrite_rule("about_us/newsroom/([0-9]{4})/([0-9]{2})/page/?([0-9]{1,})/?",'index.php?post_type=press_releases&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]','top');
	add_rewrite_rule("about_us/press_releases/([0-9]{4})/([0-9]{2})/?",'index.php?post_type=press_releases&year=$matches[1]&monthnum=$matches[2]','top');

	// Add year archive (and pagination)
	add_rewrite_rule("about_us/press_releases/([0-9]{4})/page/?([0-9]{1,})/?",'index.php?post_type=press_releases&year=$matches[1]&paged=$matches[2]','top');
	add_rewrite_rule("about_us/press_releases/([0-9]{4})/?",'index.php?post_type=press_releases&year=$matches[1]','top');

}

add_action('init', 'custom_rewrite_rule', 9999);


add_filter( 'gform_validation_message', 'change_message', 10, 2 );
function change_message( $message, $form ) {
	return "<div class='validation_error'>Please fill in the missing information below.</div>";
}

// Adding post-type into author archive

function custom_post_author_archive($query) {
	if ($query->is_author)
		$query->set( 'post_type', array('resource', 'post', 'newsroom_post') );
	remove_action( 'pre_get_posts', 'custom_post_author_archive' );
}
add_action('pre_get_posts', 'custom_post_author_archive');

// Add a new custom field named "my_data"
function eg_custom_data_sources( $sources ) {
	$sources['posts']['choices']['post_parent'] = 'Post Parent';
	return $sources;
}

add_filter( 'facetwp_facet_sources', 'eg_custom_data_sources' );

// Save page parent
function eg_facetwp_index_row( $params, $class ) {
	$post_ID = $params['post_id'];
	if ( 'post_parent' == $params['facet_name'] ) {
		$parent_ID = wp_get_post_parent_id( $post_ID );
		if($parent_ID) :
			$params['facet_value'] = $parent_ID;
			$params['facet_display_value'] = get_the_title( $parent_ID );
			return $params;
		endif;
		return false;
	}
	if ( 'post_types' == $params['facet_name'] ) {
		$post_type = get_post_type( $post_ID );
		$post_type_obj = get_post_type_object( $post_type );
		$params['facet_display_value'] = $post_type_obj->description;
	}
	return $params;
}

add_filter( 'facetwp_index_row', 'eg_facetwp_index_row', 10, 2 );


function eg_facetwp_result_count( $output, $params ) {
	$output = 'Displaying ' . $params['total'] . ' results for <a href="#">&quot;'.get_search_query().'&quot;</a>' . ' | Page ' . $params['lower'] . ' of ' .$params['upper'] ;
	return $output;
}

add_filter( 'facetwp_result_count', 'eg_facetwp_result_count', 10, 2 );

/*==============================================================================================================
=            Allows multiple instances of the same form to be run on a single page when using AJAX.            =
==============================================================================================================*/

class Gravity_Forms_Multiple_Form_Instances {

	/**
	 * Constructor.
	 *
	 * Used to initialize the plugin and hook the related functionality.
	 *
	 * @access public
	 */
	public function __construct() {
		// hook the HTML ID string find & replace functionality
		add_filter( 'gform_get_form_filter', array( $this, 'gform_get_form_filter' ), 10, 2 );
	}

	/**
	 * Replaces all occurences of the form ID with a new, unique ID.
	 *
	 * This is where the magic happens.
	 *
	 * @access public
	 *
	 * @param string $form_string The form HTML string.
	 * @param array $form Array with the form settings.
	 * @return string $form_string The modified form HTML string.
	 */
	public function gform_get_form_filter( $form_string, $form ) {
		// if form has been submitted, use the submitted ID, otherwise generate a new unique ID
		if ( isset( $_POST['gform_random_id'] ) ) {
			$random_id = absint( $_POST['gform_random_id'] ); // Input var okay.
		} else {
			$random_id = mt_rand();
		}

		// this is where we keep our unique ID
		$hidden_field = "<input type='hidden' name='gform_field_values'";

		// define all occurences of the original form ID that wont hurt the form input
		$strings = array(
			' gform_wrapper '                                                   => ' gform_wrapper gform_wrapper_original_id_' . $form['id'] . ' ',
			"for='choice_"                                                      => "for='choice_" . $random_id . '_',
			"id='choice_"                                                       => "id='choice_" . $random_id . '_',
			"id='label_"                                                        => "id='label_" . $random_id . '_',
			"'gform_wrapper_" . $form['id'] . "'"                               => "'gform_wrapper_" . $random_id . "'",
			"'gf_" . $form['id'] . "'"                                          => "'gf_" . $random_id . "'",
			"'gform_" . $form['id'] . "'"                                       => "'gform_" . $random_id . "'",
			"'gform_ajax_frame_" . $form['id'] . "'"                            => "'gform_ajax_frame_" . $random_id . "'",
			'#gf_' . $form['id'] . "'"                                          => '#gf_' . $random_id . "'",
			"'gform_fields_" . $form['id'] . "'"                                => "'gform_fields_" . $random_id . "'",
			"id='field_" . $form['id'] . '_'                                    => "id='field_" . $random_id . '_',
			"for='input_" . $form['id'] . '_'                                   => "for='input_" . $random_id . '_',
			"id='input_" . $form['id'] . '_'                                    => "id='input_" . $random_id . '_',
			"'gform_submit_button_" . $form['id'] . "'"                         => "'gform_submit_button_" . $random_id . "'",
			'"gf_submitting_' . $form['id'] . '"'                               => '"gf_submitting_' . $random_id . '"',
			"'gf_submitting_" . $form['id'] . "'"                               => "'gf_submitting_" . $random_id . "'",
			'#gform_ajax_frame_' . $form['id']                                  => '#gform_ajax_frame_' . $random_id,
			'#gform_wrapper_' . $form['id']                                     => '#gform_wrapper_' . $random_id,
			'#gform_' . $form['id']                                             => '#gform_' . $random_id,
			"trigger('gform_post_render', [" . $form['id']                      => "trigger('gform_post_render', [" . $random_id,
			'gformInitSpinner( ' . $form['id'] . ','                            => 'gformInitSpinner( ' . $random_id . ',',
			"trigger('gform_page_loaded', [" . $form['id']                      => "trigger('gform_page_loaded', [" . $random_id,
			"'gform_confirmation_loaded', [" . $form['id'] . ']'                => "'gform_confirmation_loaded', [" . $random_id . ']',
			'gf_apply_rules(' . $form['id'] . ','                               => 'gf_apply_rules(' . $random_id . ',',
			'gform_confirmation_wrapper_' . $form['id']                         => 'gform_confirmation_wrapper_' . $random_id,
			'gforms_confirmation_message_' . $form['id']                        => 'gforms_confirmation_message_' . $random_id,
			'gform_confirmation_message_' . $form['id']                         => 'gform_confirmation_message_' . $random_id,
			'if(formId == ' . $form['id'] . ')'                                 => 'if(formId == ' . $random_id . ')',
			"window['gf_form_conditional_logic'][" . $form['id'] . ']'          => "window['gf_form_conditional_logic'][" . $random_id . ']',
			"trigger('gform_post_conditional_logic', [" . $form['id'] . ','     => "trigger('gform_post_conditional_logic', [" . $random_id . ',',
			'gformShowPasswordStrength("input_' . $form['id'] . '_'             => 'gformShowPasswordStrength("input_' . $random_id . '_',
			"gformInitChosenFields('#input_" . $form['id'] . '_'                => "gformInitChosenFields('#input_" . $random_id . '_',
			"jQuery('#input_" . $form['id'] . '_'                               => "jQuery('#input_" . $random_id . '_',
			'gforms_calendar_icon_input_' . $form['id'] . '_'                   => 'gforms_calendar_icon_input_' . $random_id . '_',
			"id='ginput_base_price_" . $form['id'] . '_'                        => "id='ginput_base_price_" . $random_id . '_',
			"id='ginput_quantity_" . $form['id'] . '_'                          => "id='ginput_quantity_" . $random_id . '_',
			'gfield_price_' . $form['id'] . '_'                                 => 'gfield_price_' . $random_id . '_',
			'gfield_quantity_' . $form['id'] . '_'                              => 'gfield_quantity_' . $random_id . '_',
			'gfield_product_' . $form['id'] . '_'                               => 'gfield_product_' . $random_id . '_',
			'ginput_total_' . $form['id']                                       => 'ginput_total_' . $random_id,
			'GFCalc(' . $form['id'] . ','                                       => 'GFCalc(' . $random_id . ',',
			'gf_global["number_formats"][' . $form['id'] . ']'                  => 'gf_global["number_formats"][' . $random_id . ']',
			'gform_next_button_' . $form['id'] . '_'                            => 'gform_next_button_' . $random_id . '_',
			$hidden_field                                                       => "<input type='hidden' name='gform_random_id' value='" . $random_id . "' />" . $hidden_field,
		);

		// allow addons & plugins to add additional find & replace strings
		$strings = apply_filters( 'gform_multiple_instances_strings', $strings );

		// replace all occurences with the new unique ID
		foreach ( $strings as $find => $replace ) {
			$form_string = str_replace( $find, $replace, $form_string );
		}

		return $form_string;
	}

}

// initialize the plugin
//global $gravity_forms_multiple_form_instances;
//$gravity_forms_multiple_form_instances = new Gravity_Forms_Multiple_Form_Instances();



function position_posts_per_page( $query ) {
    if ( $query->is_main_query() && is_tax( 'position' ) ) {
        $query->set( 'posts_per_page', '-1' );
    }
}
add_action( 'pre_get_posts', 'position_posts_per_page' );
