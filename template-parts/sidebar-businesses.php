<?php
    /**
     * Some sidebar to display for when the category is Businesses.
     *
     * @package big-idea
     */

    $output = '';

    /*
    Check that the Feedback Post plugin is installed.
    If it is, then display a link to the Feedback Post
    archive if the user has privledges to view it.
    */
    if (function_exists ('is_feedback_post_role')) {
        if (is_feedback_post_role(wp_get_current_user()) && is_user_logged_in()) {
            /*
            If user is a business subscriber and is logged in, then show a link
            to their feedback and the logout link.
            */
            $output .= '<li>'.get_feedback_post_archive_link(FEEDBACK_LINK).'</li>';
            $output .= '<li><a href="'.wp_logout_url( home_url() ).'">'.BUSINESS_LOGOUT_LINK.'</a></li>';
        } else if  (!is_user_logged_in()) {
            /*
            If the user is not logged in, show login and registration links.
            */
            $output .= '<li><a href="'.wp_login_url( '/category/businesses/' ).'">'.BUSINESS_LOGIN_LINK.'</a></li>';
            $output .= '<li><a href="'.wp_registration_url( '/category/businesses/' ).'">'.BUSINESS_REGISTER_LINK.'</a></li>';

        } else if  (is_user_logged_in()) {
            /*
            If the user is a registered user, but not a business user, then just show the logout link.
            */
            $output .= '<li><a href="'.wp_logout_url( home_url() ).'">'.BUSINESS_LOGOUT_LINK.'</a></li>';
        }
    }
    echo $output;
?>
