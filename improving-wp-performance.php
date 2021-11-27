// remove dashicons in frontend to non-admin 
function wpdocs_dequeue_dashicon() {
	if (current_user_can( 'update_core' )) {
		return;
	}
	wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

//remove google fonts
function remove_google_fonts()
{
	wp_dequeue_style('astra-google-fonts-css');
	wp_deregister_style('astra-google-fonts-css');
	wp_dequeue_style('astra-theme-css-inline-css');
	wp_deregister_style('astra-theme-css-inline-css');
	
}

add_action('wp_enqueue_scripts', 'remove_google_fonts', 100);
