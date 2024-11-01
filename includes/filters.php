<?php

/**
 * @description Returns an image with an svg for missing post thumbnails
 *
 * @see         wp-includes/post-thumbnail-template.php:179
 *
 * @uses        \plugins_url()
 */
add_filter( 'post_thumbnail_html', function( $html, $post_ID, $post_thumbnail_id, $size, $attr ){
	if( '' !== $html ){
		return $html;
	}
	$placeholder = plugins_url('/assets/images/placeholder.svg', __DIR__);
	$html = "<img src='${placeholder}' class='".SHISHI_ODOSHI_SLUG." attachment-post-thumbnail size-post-thumbnail wp-post-image' />";
	return $html;
}, 32, 5 );
