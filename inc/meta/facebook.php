<?php
/**
 * Steel facebook og tags
 *
 * @package WordPress
 * @subpackage Steel
 * @since Steel 1.0
 */
?>

<!-- Facebook og tags -->
<meta property="fb:app_id" content="<?php echo get_settings_config( 'facebook' ); ?>" />
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
<meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
<meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
<meta property="og:image" content="<?php echo esc_url( home_url( '/media/images/people/me.png' ) ); ?>" />