<?php
/**
 * Steel favicon meta/link tags
 *
 * @package WordPress
 * @subpackage Steel
 * @since Steel 1.0
 */
?>

<!-- Windows Phone 8 meta (needs to be 144x144, should have transparent png) -->
<meta name="msapplication-TileImage" content="<?php echo favicon_url( '144x144.png' ); ?>" />
<!-- Windows Phone 8 meta (should be most prominent color, [rgb, keywords, hex]) -->
<meta name="msapplication-TileColor" content="rgb(246,246,246)" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<!-- Favicon for iPad 3rd/4th Generation -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo favicon_url( '144x144.png' ); ?>.png" />
<!-- Favicon for iPhone 4/4S/5 & iPod Touch 2012 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo favicon_url( '114x114.png' ); ?>" />
<!-- Favicon for iPad, iPad 2 & iPad Mini -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo favicon_url( '72x72.png' ); ?>" />
<!-- Favicon for iPhone 3GS, iPod Touch 2011, & older Android devices -->
<link rel="apple-touch-icon-precomposed" href="<?php echo favicon_url( '144x144.png' ); ?>" />
<!-- Favicon for Browsers 32x32 -->
<link rel="icon shortcut" href="<?php echo favicon_url( '32x32.png' ); ?>" />
<!-- Favicon for Legacy Browsers 16x16 -->
<link rel="icon shortcut" href="<?php echo esc_url( home_url( 'favicon.ico' ) ); ?>" />

<!-- Apple Startup Images -->
<!-- iPhone 3GS, 2011 iPod Touch -->
<link rel="apple-touch-startup-image" sizes="320x460" href="<?php echo image_path_url( 'startup/320x460.png' ); ?>" media="screen and (max-device-width : 320px)">
<!-- iPhone 4, 4S and 2011 iPod Touch -->
<link rel="apple-touch-startup-image" sizes="640x920" href="<?php echo image_path_url( 'startup/640x920.png' ); ?>" media="(max-device-width : 480px) and (-webkit-min-device-pixel-ratio : 2)">
<!-- iPhone 5 and 2012 iPod Touch -->
<link rel="apple-touch-startup-image" sizes="640x1096" href="<?php echo image_path_url( 'startup/640x1096.png' ); ?>" media="(max-device-width : 548px) and (-webkit-min-device-pixel-ratio : 2)">
<!-- iPad landscape -->
<link rel="apple-touch-startup-image" sizes="1024x748" href="<?php echo image_path_url( 'startup/1024x748.png' ); ?>" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)">
<!-- iPad Portrait -->
<link rel="apple-touch-startup-image" sizes="768x1024" href="<?php echo image_path_url( 'startup/768x1024.png' ); ?>" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)">