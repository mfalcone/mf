<?php
/**
 * The template for displaying search forms in maxifalcone2
 *
 * @package maxifalcone2
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Buscar:', 'label', 'maxifalcone2' ); ?></span>
	</label>
		
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Buscar en el sitio &hellip;', 'placeholder', 'maxifalcone2' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'maxifalcone2' ); ?>">
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'maxifalcone2' ); ?>">
</form>
