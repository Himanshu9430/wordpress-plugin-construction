<?php
/*
Plugin Name: Block Shortcodes
Plugin URI: https://github.com/szepeviktor/wordpress-plugin-construction
Description: Wrap any content in <code>div</code> elements thus enabling content styling with CSS
Version: 0.1
License: The MIT License (MIT)
Author: Viktor Szépe
Author URI: http://www.online1.hu/webdesign/
*/

add_shortcode( 'block', 'o1_block_shortcode' );
add_shortcode( 'block2', 'o1_block_shortcode' );
add_shortcode( 'block3', 'o1_block_shortcode' );
add_shortcode( 'block4', 'o1_block_shortcode' );
add_shortcode( 'block5', 'o1_block_shortcode' );
add_shortcode( 'block6', 'o1_block_shortcode' );
add_shortcode( 'block7', 'o1_block_shortcode' );
add_shortcode( 'block8', 'o1_block_shortcode' );
add_shortcode( 'block9', 'o1_block_shortcode' );

function o1_block_shortcode( $atts, $content = null ) {
    return o1_tag( 'div', $atts, $content );
}

function o1_tag( $tag, $attributes = array(), $content = null ) {

    if ( empty( $tag ) || ! is_array( $attributes ) )
        return $content;

    foreach ( $attributes as $attribute => &$data ) {
        if ( empty( $data ) || true === $data ) {
            // empty attributes
            $data = esc_attr( $attribute );
        } else {
            $data = implode( ' ', (array) $data );
            $data = $attribute . '="' . esc_attr( $data ) . '"';
        }
    }

    $attribute_string =  $attributes ? ' ' . implode( ' ', $attributes ) : '';
    $html = '<' . $tag . $attribute_string;
    // self-closing elements
    $html .= is_null( $content ) ? ' />' : '>' . $content . '</' . $tag . '>';
    return wp_kses_post( $html );
}
