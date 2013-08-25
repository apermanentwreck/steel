<?php
/**
 * Steel profile link tags
 *
 * @package WordPress
 * @subpackage Steel
 * @since Steel 1.0
 */
?>

<!-- Profile information -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="EditURI" href="<?php echo get_bloginfo('wpurl'); ?>/xmlrpc.php?rsd" title="RSD" type="application/rsd+xml" />
<link rel="wlwmanifest" href="<?php echo get_bloginfo('wpurl');?>/wp-includes/wlwmanifest.xml" type="application/wlwmanifest+xml" />
<link rel="author" href="<?php echo esc_url( home_url( '/humans.txt' ) ); ?>" type="text/plain" />