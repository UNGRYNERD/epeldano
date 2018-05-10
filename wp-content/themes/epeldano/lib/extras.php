<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip;';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/**
 * Limit words the_excerpt()
 */
function ungrynerd_excerpt_length( $length ) {
  return 11;
}
add_filter( 'excerpt_length', __NAMESPACE__ . '\\ungrynerd_excerpt_length', 999 );


/**
 * inline svg helper
 */
function inline_svg($svg) {
  $output = '';
  if (empty($svg)) {
    return;
  }
  $svg_file_path = \get_template_directory() . "/dist/images/" . $svg . ".svg";
  return file_get_contents($svg_file_path);
}


/**
 * Remove WP version
 */
function wpsecure_remove_version() {
  return '';
}
add_filter('the_generator', __NAMESPACE__ . '\\wpsecure_remove_version');


/**
 * remove type attribute in script and style tags
 */
function ungrynerd_remove_type_attr($tag, $handle) {
  return preg_replace("/type=['\"]text\/(javascript|css)['\"]/", '', $tag);
}
add_filter('style_loader_tag', __NAMESPACE__ . '\ungrynerd_remove_type_attr', 10, 2);
add_filter('script_loader_tag', __NAMESPACE__ . '\ungrynerd_remove_type_attr', 10, 2);



/**
 * remove emojis support
 */
function disable_wp_emojicons() {
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');

  add_filter('tiny_mce_plugins', __NAMESPACE__ . '\disable_emojicons_tinymce');
  add_filter('emoji_svg_url', '__return_false');
}
add_action('init', __NAMESPACE__ . '\disable_wp_emojicons');

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

add_action('acf/init', __NAMESPACE__ . '\ungrynerd_acf_init');
function ungrynerd_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyDi3Nfc8OxZr_UE_X-o4RXyruymMY3aV2o');
}



/**
*  Return more posts based on paged and posts_per_page post parameters.
*/
function ungrynerd_more() {
  $args = isset($_POST['query']) ? array_map('esc_attr', $_POST['query']) : array();
  $args['post_type'] = 'post';
  $args['paged']  = isset($_POST['paged']) ? esc_attr($_POST['paged']) : 2;
  $args['post_status'] = "publish";
  $args['posts_per_page']  = 3;
  $more = new \WP_Query($args);

  $return = '';
  ob_start();
  while ($more->have_posts()) : $more->the_post();
    get_template_part('templates/post', 'news');
  endwhile;
  $return .= ob_get_clean();
  if ($more->max_num_pages == $args['paged']) {
    $return .= '<div class="no-more"></div>';
  }
  wp_reset_postdata();
  wp_die($return);
}

add_action('wp_ajax_nopriv_ungrynerd_more', __NAMESPACE__ . '\\ungrynerd_more');
add_action('wp_ajax_ungrynerd_more', __NAMESPACE__ . '\\ungrynerd_more');

