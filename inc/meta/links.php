<?php
/**
 * Steel meta link tags
 *
 * @package WordPress
 * @subpackage Steel
 * @since Steel 1.0
 */
?>

<!-- Meta Links -->
<link rel="top" href="#" title="top" />
<link rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home Page" />         
<link rel="contents" href="<?php echo esc_url( home_url( '/site-map.xml' ) ); ?>" title="Site Map" /> 
<link rel="copyright" href="<?php echo esc_url( home_url( '/license.md' ) ); ?>" title="Copyright" /> 
<link rel="search" href="<?php echo esc_url( home_url( '/search' ) ); ?>" title="Search This Site" />
