<?php

if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) exit();

if ( get_option('mui_keepvalues') == 'delete' ) {
	delete_option( 'mui_posttype' );
	delete_option( 'mui_pages' );
	delete_option( 'mui_title' );
	delete_option( 'mui_position' );
	delete_option( 'mui_keepvalues' );
	$post_types = get_post_types( array( 'public' => true ), 'names' ); 
	unset($post_types['attachment']); 
	$posts = get_posts( array( 'numberposts' => -1, 'post_type' => $post_types, 'post_status' => 'any' ) );
	foreach ( $posts as $post ) delete_post_meta( $post->ID, 'my_upload_images' );
	return;
}

?>
