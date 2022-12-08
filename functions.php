<?php
define('WOOF_THEME_PATH',		get_template_directory());
define('WOOF_THEME_URL',		get_template_directory_uri());
require (WOOF_THEME_PATH . '/includes/style.php');
require (WOOF_THEME_PATH . '/includes/js.php');
require (WOOF_THEME_PATH . '/includes/color.php');
require (WOOF_THEME_PATH . '/includes/AfterSetupTheme.php');
require (WOOF_THEME_PATH . '/includes/functions.php');
require (WOOF_THEME_PATH . '/includes/ini/woof-base.php'); 
require (WOOF_THEME_PATH . '/pagination.php');

if ( ! isset( $content_width ) ) $content_width = 900;	

$woof_options = get_option('woof');

// register nav menu
function woof_register_menus() {
register_nav_menus( array( 
'top-menu' => esc_attr__( 'Primary menu','woof' ),
)
		);
}


add_action( 'after_setup_theme', 'woof_setup' );
function woof_setup() {
	
    // Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
	// Enqueue editor styles.
	add_editor_style( 'style-editor.css' );
	
	// Add custom editor font sizes.
	add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Small', 'woof' ),
					'shortName' => esc_html__( 'S', 'woof' ),
					'size'      => 12,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'woof' ),
					'shortName' => esc_html__( 'M', 'woof' ),
					'size'      => 15,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'woof' ),
					'shortName' => esc_html__( 'L', 'woof' ),
					'size'      => 36,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'woof' ),
					'shortName' => esc_html__( 'XL', 'woof' ),
					'size'      => 49,
					'slug'      => 'huge',
				),
			)
		);
	
	add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_html__( 'Red', 'woof' ),
            'slug' => 'color-red',
            'color' => '#F9575C',
        ),
        array(
            'name' => esc_html__( 'Yellow', 'woof' ),
            'slug' => 'color-yellow',
            'color' => '#F9BE4F',
        ),
        
    ) );
	
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
	
	add_action( 'after_setup_theme', 'woof_lang_setup' );
	function woof_lang_setup(){
    load_theme_textdomain('woof', get_template_directory() . '/languages');
    }
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "title-tag" );
	remove_theme_support( 'widgets-block-editor' );
	add_theme_support( 'post-formats', array('image','video') );
	add_post_type_support( 'portgallery', 'post-formats' );
}
// Word Limit 
	function woof_string_limit_words($string, $word_limit)
	{
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
	}
// Add post thumbnail functionality
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 559, 220, true ); // Normal post thumbnails
	add_image_size( 'woof_team_member', 351, 355, true ); // Team Thumbnail
	add_image_size( 'woof_adopt', 185, 185, true ); // Adopt Thumbnail
	add_image_size( 'woof_adoption_image', 600, 600, true ); // Adoption Details Thumbnail
	add_image_size( 'woof_services_gallery', 600, 437, true ); // Services port Thumbnail
	add_image_size( 'woof_portfolio_slider', 800, 800, true ); // Portfolio Thumbnail	
	add_image_size( 'woof_services_slider', 800, 891, true ); // Services Slider Thumbnail	
	
	add_image_size( 'woof_blog_image', 298, 224, true ); // port Thumbnail
	add_image_size( 'woof_blog_image_col', 505, 290, true ); // port Thumbnail
	add_image_size( 'woof_portfolio_image', 700, 400, true ); // port Thumbnail
	add_image_size( 'woof_gallery', 838, 468, true ); // port Thumbnail

// How comments are displayed
function woof_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
if ( 'div' == $args['style'] ) {
      $tag = 'div';
      $add_below = 'comment row';
    } else {
      $tag = 'li';
      $add_below = 'div-comment';
    }
?>
    <<?php echo esc_attr($tag); ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?>>
    <?php if ( 'div' != $args['style'] ) : ?>
	
    <?php endif; ?>
    
	<div id="div-comment-<?php comment_ID() ?>" class="media row">

		<div class="col-md-3 col-xs-12 comment-img text-center float-left">
			<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, '139' ); ?>
		</div>
					
		<div class="col-md-9 col-xs-12 float-right">							
			<h6 class="mt-2">
				<span class="comment_author"><?php printf(esc_attr__('%s','woof'), get_comment_author_link()) ?></span>
				<small><?php esc_attr_e(' / ','woof') ?><?php comment_date(get_option( 'date_format')); ?> </small> 
			</h6>
			<div class="comment-text">
				<?php comment_text() ?>		
			</div>
			<div class="comment-reply">
			   <button type="submit" class="btn btn-primary btn-sm float-right"><?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></button>	
			</div>			
		</div>		
	
	</div>
   
    <div class="clearfix"></div>
      <?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php esc_attr_e('Your comment is awaiting moderation.','woof') ?></em>
    <br />
	
   <?php endif; ?>    
<?php if ( 'div' != $args['style'] ) : ?>
    
    <?php endif; ?>
<?php
        }
// create sidebar & widget area
if(function_exists('register_sidebar')) {
function woof_theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => esc_attr__( 'Blog Sidebar', 'woof' ),
        'id' => 'sidebar-1',
        'description' => esc_attr__( 'This area for Blog widgets.', 'woof' ),
        'before_widget' => '<div id="%1$s" class="widget woof-sidebar-widget card %2$s"><div class="carde">',
		'after_widget'  => '</div></div>', 
		'before_title'  => '</div><h5 class="card-header">', 
		'after_title'   => '</h5><div class="card-body">'
    ) );
}
add_action( 'widgets_init', 'woof_theme_slug_widgets_init' );

function woof_widgets_init() {
    register_sidebar( array(
        'name' => esc_attr__( 'Page Sidebar', 'woof' ),
        'id' => 'sidebar-2',
        'description' => esc_attr__( 'This area for Page Sidebar widgets.', 'woof' ),
        'before_widget' => '<div id="%1$s" class="widget woof-sidebar-widget card %2$s"><div class="carde">',
		'after_widget'  => '</div></div>', 
		'before_title'  => '</div><h5 class="card-header">', 
		'after_title'   => '</h5><div class="card-body">'
    ) );
}
add_action( 'widgets_init', 'woof_widgets_init' );

function woof_footer_widgets_init() {
    register_sidebar( array(
        'name' => esc_attr__( 'Footer Widget 1', 'woof' ),
        'id' => 'sidebar-3',
        'description' => esc_attr__( 'This area for footer widget 1.', 'woof' ),
        'before_widget' => '<div id="%1$s" class="widget footer-widget-block %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h6><i class="fas fa-th margin-icon"></i>', 
		'after_title'   => '</h6>'
    ) );
}
add_action( 'widgets_init', 'woof_footer_widgets_init' );

function woof_footer2_widgets_init() {
    register_sidebar( array(
        'name' => esc_attr__( 'Footer Widget 2', 'woof' ),
        'id' => 'sidebar-4',
        'description' => esc_attr__( 'This area for footer widget 2.', 'woof' ),
        'before_widget' => '<div id="%1$s" class="widget footer-widget-block %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h6><i class="fas fa-th margin-icon"></i>', 
		'after_title'   => '</h6>'
    ) );
}
add_action( 'widgets_init', 'woof_footer2_widgets_init' );

function woof_footer3_widgets_init() {
    register_sidebar( array(
        'name' => esc_attr__( 'Footer Widget 3', 'woof' ),
        'id' => 'sidebar-5',
        'description' => esc_attr__( 'This area for footer widget 3.', 'woof' ),
        'before_widget' => '<div id="%1$s" class="widget footer-widget-block %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h6><i class="fas fa-th margin-icon"></i>', 
		'after_title'   => '</h6>'
    ) );
}
add_action( 'widgets_init', 'woof_footer3_widgets_init' );

function woof_footer4_widgets_init() {
    register_sidebar( array(
        'name' => esc_attr__( 'Footer Widget 4', 'woof' ),
        'id' => 'sidebar-6',
        'description' => esc_attr__( 'This area for footer widget 4.', 'woof' ),
        'before_widget' => '<div id="%1$s" class="widget footer-widget-block %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h6><i class="fas fa-th margin-icon"></i>', 
		'after_title'   => '</h6>'
    ) );
}
add_action( 'widgets_init', 'woof_footer4_widgets_init' );

function woof_footer5_widgets_init() {
    register_sidebar( array(
        'name' => esc_attr__( 'Services Page Widget', 'woof' ),
        'id' => 'sidebar-7',
        'description' => esc_attr__( 'This area for services page widget.', 'woof' ),
        'before_widget' => '<div id="%1$s" class="widget woof-sidebar-widget %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h6>', 
		'after_title'   => '</h6>'
    ) );
}
add_action( 'widgets_init', 'woof_footer5_widgets_init' );

if (class_exists('WooCommerce')) {

function woof_theme_slug_widgets___init() {
    register_sidebar( array(
        'name' => esc_attr__( 'WOOCOMMERCE Sidebar','woof' ),
        'id' => 'sidebar-8',
        'description' => esc_attr__( 'This area for All WOOCOMMERCE Widget.','woof' ),
        'before_widget' => '<div id="%1$s" class="widget woof-sidebar-widget card %2$s"><div class="carde">',
		'after_widget'  => '</div></div>', 
		'before_title'  => '</div><h5 class="card-header">', 
		'after_title'   => '</h5><div class="card-body">'
    ) );
}
add_action( 'widgets_init', 'woof_theme_slug_widgets___init' );

}

}
if(function_exists('vc_set_as_theme')) vc_set_as_theme();
// Initialising Shortcodes
if (class_exists('WPBakeryVisualComposerAbstract')) {
  function requireVcExtend(){
    require_once get_template_directory() . '/extendvc/extend-vc.php';
  }  
}

/* CHECK WOOCOMMERCE IS ACTIVE
  ================================================== */ 
  if ( ! function_exists( 'woof_woocommerce_activated' ) ) {
    function woof_woocommerce_activated() {
      if ( class_exists( 'woocommerce' ) ) {
        return true;
      } else {
        return false;
      }
    }
  }

function woocommerce_pagination() {
		woof_pagination(); 		
	}
add_action( 'woocommerce_pagination', 'woocommerce_pagination', 10);


/**
 * Change number of related products output
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'woof_related_products_args', 20 );
  function woof_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 3 related products
	$args['columns'] = 3; // arranged in 1 columns
	return $args;
}

function woof_my_search_form( $form ) {
$woof_options = get_option('woof');
if(!empty($woof_options['translet_opt_22'])) {
$woof_search_text = esc_html(woof_AfterSetupTheme::return_thme_option('translet_opt_22',''));
}
else {
$woof_search_text ='Type & Hit Enter...';
}
    $woof_form = '<form role="search" method="get" id="searchform" class="searh-inner fl-wrap" action="' . esc_url(home_url( '/' )) . '" >
    <div><label class="screen-reader-text" for="s">' . esc_html__( 'Search for:','woof' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" class="search fl-wrap" placeholder="'. esc_attr($woof_search_text).'" />
    </div>
    </form>';
 
    return $woof_form;
}
add_filter( 'get_search_form', 'woof_my_search_form' );

if (is_admin() && isset($_GET['activated'])){
	wp_redirect(admin_url("themes.php?page=woof"));
}