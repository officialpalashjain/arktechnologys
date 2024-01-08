<?php
include_once('includes/theme-options.php');
add_theme_support( 'post-thumbnails' );

add_action('admin_enqueue_scripts', 'theme_backend_scripts_styles');
function theme_backend_scripts_styles()
{
  wp_enqueue_style('thickbox');
  wp_enqueue_script('jquery');
  wp_enqueue_script('media-upload');
  wp_enqueue_script('thickbox');
  wp_enqueue_script('admin-scripts', get_stylesheet_directory_uri().'/js/admin-scripts.js');
}

add_action('wp_enqueue_scripts', 'theme_frontend_scripts_styles');
function theme_frontend_scripts_styles()
{
  wp_enqueue_style('bootstrap-min-css', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
  wp_enqueue_style('fontawesome5-min-css', get_stylesheet_directory_uri().'/css/fontawesome5.min.css');
  wp_enqueue_style('css-slick-css', get_stylesheet_directory_uri().'/css/slick.css');
  wp_enqueue_style('css-slick-theme-css', get_stylesheet_directory_uri().'/css/slick-theme.css');
  wp_enqueue_style('css-styles-css', get_stylesheet_directory_uri().'/css/style.css');
  wp_enqueue_style('theme-style', get_stylesheet_directory_uri().'/style.css'); 
  
  wp_enqueue_script('bootstrap-bundle-min-js', get_stylesheet_directory_uri().'/js/bootstrap.bundle.min.js' ,array( 'jquery' ),'',false);
  // wp_enqueue_script('jquery-3.6.1-min-js', get_stylesheet_directory_uri().'/js/jquery-3.6.1.min.js' ,'','',true);
  wp_enqueue_script('fontawesome5-min-js', get_stylesheet_directory_uri().'/js/fontawesome5.min.js' ,'','',true);
  wp_enqueue_script('slick-js', get_stylesheet_directory_uri().'/js/slick.min.js' ,'','',true);
 }


add_action( 'after_setup_theme', 'when_theme_isset' );
function when_theme_isset() {
  register_nav_menu( 'header_menu', __( 'Header Menu' ) );
  register_nav_menu( 'footer_menu', __( 'Footer Menu' ) );
  register_nav_menu( 'footer_services_menu', __( 'Footer Services' ) );
}

function get_image_alt_by_url( $image_url ) {
    global $wpdb;

    if( empty( $image_url ) ) {
        return false;
    }
    $query_arr  = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM {$wpdb->posts} WHERE guid='%s';", strtolower( $image_url ) ) );
    if(empty($query_arr))
    {
      $image_url = str_replace("https", "http", $image_url);
      $query_arr  = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM {$wpdb->posts} WHERE guid='%s';", strtolower( $image_url ) ) );
    }

    // print_r($query_arr);
    $image_id   = ( ! empty( $query_arr ) ) ? $query_arr[0] : 0;

    return get_post_meta( $image_id, '_wp_attachment_image_alt', true );
}

// custom class to anchor
function custom_classto_anchor($atts) {
  $atts['class'] = "nav-link";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'custom_classto_anchor');
// custom class to anchor


// custom class to list
function custom_classto_list( $classes, $item ) {
  $classes[] = "nav-item";
  return $classes;
} 
add_filter( 'nav_menu_css_class' , 'custom_classto_list' , 10, 2 );
// custom class to list

add_action( 'widgets_init', 'arktechnologys_widgets_init' );

function arktechnologys_widgets_init() {
  register_sidebar(
    array(
      'name'          => esc_html__( 'Footer Copy Right', 'arktechnologys' ),
      'id'            => 'footer-copy-right',
      'description'   => esc_html__( 'Add widgets here.', 'arktechnologys' ),
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>'
    )
  );
}
