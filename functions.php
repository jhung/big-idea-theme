<?php

/**
 * Theme functions
 *
 * @package big-idea
 */

require_once( get_stylesheet_directory() . '/strings.php' );

function big_idea_theme_enqueue_styles() {
    $parent_style = 'a11y-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'big_idea_theme_enqueue_styles' );

/* Specify a custom login page style to match the BIG IDEA Theme */
function big_idea_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login.css' );
}
add_action( 'login_enqueue_scripts', 'big_idea_login_stylesheet' );

/* Have the logo on the login page go to the BIG IDeA site instead of Wordpress. */
function big_idea_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'big_idea_login_logo_url' );

/* Add a title to the logo on the Login page. */
function big_idea_login_logo_url_title() {
    return LOGIN_LOGO_LINK;
}
add_filter( 'login_headertitle', 'big_idea_login_logo_url_title' );

/* Add a custom message for login and registration.
   Each message is hidden or shown using CSS. */
function big_idea_business_login_message() {
    $output = '<div class="bi-login-message">'.LOGIN_MESSAGE.'</div>';
    $output .= '<div class="bi-register-message">'.REGISTER_MESSAGE.'</div>';
    $output .= '<div class="bi-reset-message">'.RESET_MESSAGE.'</div>';
    $output .= '<div class="bi-reset-success">'.RESET_SUCCESS.'</div>';
    return $output;
}
add_filter('login_message', 'big_idea_business_login_message' );

/* Remove the admin bar for non-editors and non-admins */
function remove_admin_bar() {
    if (!current_user_can('editor') && !is_admin()) {
      show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'remove_admin_bar');

?>
