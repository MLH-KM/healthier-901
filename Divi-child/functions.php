<?php

// Allow scaling to improve accessibility
function remove_my_action() {
remove_action('wp_head', 'et_add_viewport_meta');
}
function custom_et_add_viewport_meta(){
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=1" />';
}
add_action( 'init', 'remove_my_action');
add_action( 'wp_head', 'custom_et_add_viewport_meta' );