<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  $wp_customize->add_setting( 'secondary_logo', array(
    'sanitize_callback' => 'esc_url_raw',
  ) );
  $wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'ungrynerd_secondary_logo', array(
    'label'    => __( 'Logo secundario', 'ungrynerd' ),
    'section'  => 'title_tagline',
    'settings' => 'secondary_logo',
  ) ) );
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
