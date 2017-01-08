<?php
/**
 * Adds page category and tagging ability
 */

if ( ! function_exists( 'foundationpress_page_category' ) ) :
function foundationpress_page_category() {

	register_taxonomy_for_object_type( 'post_tag', 'page' );
	register_taxonomy_for_object_type( 'category', 'page' );

}
add_action( 'init','foundationpress_page_category' );
endif;
