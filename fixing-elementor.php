// Deactivate Eicons in Elementor
add_action( 'wp_enqueue_scripts', 'js_remove_default_stylesheet', 20 );
function js_remove_default_stylesheet() {

// Don't remove it in the backend
if ( is_admin() || current_user_can( 'manage_options' ) ) {
return;
}
wp_deregister_style( 'elementor-icons' );
}
