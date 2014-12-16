<?php defined('ABSPATH') or die();

/**
 * Theme Options Page
 *
 * @author Nina Taberski-Besserdich
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */



add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

// Einstellungen registrieren (http://codex.wordpress.org/Function_Reference/register_setting)
function theme_options_init(){
	register_setting( 'bicbswp_options', 'bicbswp_theme_options', 'bicbswp_validate_options' );
}

// Seite in der Dashboard-Navigation erstellen
function theme_options_add_page() {
	add_theme_page('Optionen', 'Optionen', 'edit_theme_options', 'theme-optionen', 'bicbswp_options_page' ); 
// Seitentitel, Titel in der Navi, Berechtigung zum Editieren (http://codex.wordpress.org/Roles_and_Capabilities) , Slug, Funktion 
}

// Optionen-Seite erstellen
function bicbswp_options_page() {
global $select_options, $radio_options;
if ( ! isset( $_REQUEST['settings-updated'] ) )
	$_REQUEST['settings-updated'] = false; ?>

<div class="wrap"> 
<?php screen_icon(); ?><h2>Theme-Optionen für <?php bloginfo('name'); ?></h2> 

<?php if ( false !== $_REQUEST['settings-updated'] ) : ?> 
<div class="updated fade">
	<p><strong>Einstellungen gespeichert!</strong></p>
</div>
<?php endif; ?>

  <form method="post" action="options.php">
	<?php settings_fields( 'bicbswp_options' ); ?>
    <?php $options = get_option( 'bicbswp_theme_options' ); ?>

    <table class="form-table">
      <tr valign="top">
        <th scope="row">Logo</th>
        <td><input id="bicbswp_theme_options[logo]" class="regular-text" type="text" name="bicbswp_theme_options[logo]" value="<?php esc_attr_e( $options['logo'] ); ?>" /></td>
      </tr>  
      <tr valign="top">
        <th scope="row">Favicon</th>
        <td><input id="bicbswp_theme_options[favicon]" class="regular-text" type="text" name="bicbswp_theme_options[favicon]" value="<?php esc_attr_e( $options['favicon'] ); ?>" /></td>
      </tr>  
      
       <tr>
	 <th scope="row">Show Content of Page (ID) on top of index.php if used as frontpage</th>
		<td><input id="bicbswp_theme_options[front_page]" name="bicbswp_theme_options[front_page]" type="text" value="<?php esc_attr_e( $options['front_page'] ); ?>" />	
	</td>
      </tr>     
      <tr>
          
      </tr>
      <tr valign="top">
        <th scope="row">Copyright</th>
        <td><textarea id="bicbswp_theme_options[footertext]" class="large-text" cols="50" rows="2" name="bicbswp_theme_options[footertext]"><?php esc_attr_e( $options['footertext'] ); ?></textarea></td>
      </tr>  
      <tr valign="top">
        <th scope="row">Google Analytics</th>
        <td><textarea id="bicbswp_theme_options[analytics]" class="large-text" cols="50" rows="10" name="bicbswp_theme_options[analytics]"><?php echo esc_textarea( $options['analytics'] ); ?></textarea></td>
      </tr>
      <tr>
	 <th scope="row">Use Excerpts</th>
		<td><input id="bicbswp_theme_options[excerpts]" name="bicbswp_theme_options[excerpts]" type="checkbox" value="1" <?php checked( '1', $options['excerpts'] ); ?> />	
	</td>
      </tr>   
          
      <tr>
	 <th scope="row">Show Meta Data (Posted on .. by..) </th>
		<td><input id="bicbswp_theme_options[meta_data]" name="bicbswp_theme_options[meta_data]" type="checkbox" value="1" <?php checked( '1', $options['meta_data'] ); ?> />	
	</td>
      </tr> 
      <tr>
	 <th scope="row">Size of Featured Image on Archive Pages </th>
		<td>thumbnail<input id="bicbswp_theme_options[featured_img_arch_thumb]" name="bicbswp_theme_options[featured_img_arch_size]" type="radio" value="1" <?php checked( '1', $options['featured_img_arch_size'] ); ?> />
                    medium<input id="bicbswp_theme_options[featured_img_arch_med]" name="bicbswp_theme_options[featured_img_arch_size]" type="radio" value="2" <?php checked( '2', $options['featured_img_arch_size'] ); ?> />
                    large<input id="bicbswp_theme_options[featured_img_arch_large]" name="bicbswp_theme_options[featured_img_arch_size]" type="radio" value="3" <?php checked( '3', $options['featured_img_arch_size'] ); ?> />
	</td>
      </tr> 
       <tr>
	 <th scope="row">Size of Featured Image on Single Post</th>
		<td>thumbnail<input id="bicbswp_theme_options[featured_img_sing_thumb]" name="bicbswp_theme_options[featured_img_sing_size]" type="radio" value="1" <?php checked( '1', $options['featured_img_sing_size'] ); ?> />
                    medium<input id="bicbswp_theme_options[featured_img_sing_med]" name="bicbswp_theme_options[featured_img_sing_size]" type="radio" value="2" <?php checked( '2', $options['featured_img_sing_size'] ); ?> />
                    large<input id="bicbswp_theme_options[featured_img_sing_large]" name="bicbswp_theme_options[featured_img_sing_size]" type="radio" value="3" <?php checked( '3', $options['featured_img_sing_size'] ); ?> />
	</td>
      </tr> 
      <tr>
	 <th scope="row">Show Featured Image on Single Post</th>
		<td><input id="bicbswp_theme_options[featured_single]" name="bicbswp_theme_options[featured_single]" type="checkbox" value="1" <?php checked( '1', $options['featured_single'] ); ?> />	
	</td>
      </tr> 
      <tr valign="top">
        <th scope="row">Top Callout</th>
        <td><textarea id="bicbswp_theme_options[top-callout]" class="large-text" cols="50" rows="2" name="bicbswp_theme_options[top-callout]"><?php esc_attr_e( $options['top-callout'] ); ?></textarea></td>
      </tr>  
    </table>
    
    <!-- submit -->
    <p class="submit"><input type="submit" class="button-primary" value="Save" /></p>
  </form>
</div>
<?php }


function bicbswp_validate_options( $input ) {
// Strip HTML-Code:
    // $input['footertext'] = wp_filter_nohtml_kses( $input['copyright'] );
	return $input;
}
