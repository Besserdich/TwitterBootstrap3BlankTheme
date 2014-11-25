<?php defined('ABSPATH') or die();

/**
 * Theme Options Page
 *
 * @author Nina Taberski-Besserdich
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */

/*-----------------------------------------------------------------------------------*/
/* Shortcodes
/*-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/* Helper for Shortcodes
/*-----------------------------------------------------------------------------------*/

// User shorcodes in sidebars
add_filter('widget_text', 'do_shortcode');

// Replace WP autop formatting
if (!function_exists( "bic_rm_wpautop")) {
     function bic_rm_wpautop($content) {
          $content = do_shortcode( shortcode_unautop( $content ) );
          $content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content);
          //$content = str_replace("</p>", "<br />", $content);
          return $content;
     }
} 




//move wpautop filter to AFTER shortcode is processed
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99);
add_filter( 'the_content', 'shortcode_unautop',100 );

/*-----------------------------------------------------------------------------------*/
/* Shortcodes for Columns
/*-----------------------------------------------------------------------------------*/

// Two Columns
function bic_shortcode_two_columns_one($atts, $content = null ) {
   return '<div class="col-md-6">' . bic_rm_wpautop($content) . '</div>';
}
add_shortcode( 'two_columns_one', 'bic_shortcode_two_columns_one' );







// Three Columns
function bic_shortcode_three_columns_one($atts, $content = null) {
   return '<div class="col-md-4">' . bic_rm_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_one', 'bic_shortcode_three_columns_one' );



function bic_shortcode_three_columns_two($atts, $content = null) {
   return '<div class="col-md-8">' . bic_rm_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_two', 'bic_shortcode_three_columns_two' );








// Four Columns
function bic_shortcode_four_columns_one($atts, $content = null) {
   return '<div class="col-md-3">' . bic_rm_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_one', 'bic_shortcode_four_columns_one' );



function bic_shortcode_four_columns_two($atts, $content = null) {
   return '<div class="col-md-6">' . bic_rm_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_two', 'bic_shortcode_four_columns_two' );



function bic_shortcode_four_columns_three($atts, $content = null) {
   return '<div class="col-md-9">' . bic_rm_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_three', 'bic_shortcode_four_columns_three' );



/*-----------------------------------------------------------------------------------*/
/* Divide Text Shortcode 
/*-----------------------------------------------------------------------------------*/

function bic_shortcode_divider($atts, $content = null) {
   return '<div class="divider"></div>';
}
add_shortcode( 'divider', 'bic_shortcode_divider' );



/*-----------------------------------------------------------------------------------*/
/* Shortcodes for Buttons 
/*-----------------------------------------------------------------------------------*/

function bic_shortcode_button($atts, $content = null) {

    extract(shortcode_atts(array(
        'type' => 'standard',
        'link'	=> '#',
        'target' => '_self',
        'size'	=> '',
    ), $atts));

	$type = ($type) ? ' btn-'.$type  : '';
	$size = ($size) ? ' btn-'.$size  : '';
        $output = '<a class="btn ' .$type.$size. '" href="' .$link. '" target="'.$target.'"><span>' .do_shortcode($content). '</span></a>';
    return $output;

    
}
add_shortcode( 'button', 'bic_shortcode_button' );
