<?php
function mytheme_child_enqueue_styles()
{
    // Connecting parent theme styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Connecting Child Theme Styles
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}

add_action('wp_enqueue_scripts', 'mytheme_child_enqueue_styles');

// Add shortcode for main page
function content_about_us_shortcode($atts)
{
    $content = get_field('text_about_us');

    if (!$content) {
        return '<p>Content missing<p>';
    }
    //Input content
    $output = '<p>';
    $output .= $content;
    $output .= '</p>';

    return $output;
}

add_shortcode('text_about_us', 'content_about_us_shortcode');

function default_gallery_shortcode($atts) {
    global $post;

    $gallery = get_post_gallery($post, false);

    if (!$gallery) {
        return '<p>Gallery missing</p>';
    }

    $output = '<div class="default-gallery">';
    foreach (explode(',', $gallery['ids']) as $attachment_id) {
        $image_src = wp_get_attachment_image_src($attachment_id, 'large');
        $image_url = $image_src[0];
        $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);

        $output .= '<div class="gallery-item">';
        $output .= '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt) . '">';
        $output .= '</div>';
    }
    $output .= '</div>';

    return $output;
}
add_shortcode('gallery', 'default_gallery_shortcode');