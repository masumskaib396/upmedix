<?php 
 /**
 * Meta shortcode content Output
 * 
 * @since 1.0
 * 
 * @return array
 */
if ( ! function_exists( 'upmedix_get_meta' ) ) {
    function upmedix_get_meta( $data ) {
        global $wp_embed;
        $content = $wp_embed->autoembed( $data );
        $content = $wp_embed->run_shortcode( $content );
        $content = do_shortcode( $content );
        $content = wpautop( $content );
        return $content;
    }
}