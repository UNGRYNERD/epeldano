<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('ungrynerd', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');
  add_theme_support('custom-logo');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Navegación principal', 'ungrynerd'),
    'pub_navigation' => __('Publicaciones footer', 'ungrynerd'),
    'exp_navigation' => __('Experiencias footer', 'ungrynerd'),
    'other_navigation' => __('Otros footer', 'ungrynerd')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');
  add_image_size('ungrynerd_big', 2000, 2000, false);
  add_image_size('ungrynerd_medium', 800, 800, false);
  add_image_size('ungrynerd_small', 400, 400, false);
  add_image_size('ungrynerd_pagelink', 960, 680, true);
  add_image_size('ungrynerd_member', 360, 400, true);
  add_image_size('ungrynerd_member_big', 720, 400, true);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Principal', 'ungrynerd'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
  ]);

  return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('ungrynerd/fonts', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900');
  wp_enqueue_style('ungrynerd/css', Assets\asset_path('styles/main.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  if (is_page_template('template-contact.php')) {
    wp_enqueue_script('google-maps', '//maps.google.com/maps/api/js?key=AIzaSyDi3Nfc8OxZr_UE_X-o4RXyruymMY3aV2o&#038;libraries=places&#038;language=es', ['jquery'], null, true);
  }

  wp_register_script('ungrynerd/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
  global $wp_query;
  $ungrynerd = array(
    'path' => get_stylesheet_directory_uri(),
    'url'  => admin_url( 'admin-ajax.php'),
    'ppp'  => 3,
    'query' => $wp_query->query
  );
  wp_localize_script('ungrynerd/js', 'ungrynerd', $ungrynerd);
  wp_enqueue_script('ungrynerd/js');
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);
