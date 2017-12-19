<?php
/**
 * Some sidebar content to display for when the category is Customers.
 *
 * @package big-idea
 */

$output = '';

/* Get all pages that are using the feedback template */
$pages = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => 'feedback-post-template.php'
));

foreach($pages as $page){
    $output .= '<li><a href="'.get_permalink($page->ID).'">'.$page->post_title.'</a></li>';
}
echo $output;
?>
