<?php
/**
 * Steel twitter hover card tags
 *
 * @package WordPress
 * @subpackage Steel
 * @since Steel 1.0
 */
?>

<!-- Twitter card -->
<meta name="twitter:site" content="<?php echo get_settings_config( 'twitter' ); ?>" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?>" />
<meta name="twitter:description" content="<?php bloginfo( 'description' ); ?>" />
<meta name="twitter:image" content="<?php echo esc_url( home_url( '/media/images/people/me.png' ) ); ?>" />
