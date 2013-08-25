<?php
/**
 * Steel mobile meta tags
 *
 * @package WordPress
 * @subpackage Steel
 * @since Steel 1.0
 */
?>

<!-- IE meta tag, force it to Edge compatibility -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<!-- BlackBerry meta tags (http://docs.blackberry.com/en/developers/deliverables/6176/HTML_ref_meta_564143_11.jsp) -->
<meta name="HandheldFriendly" content="True" />

<!-- Windows Phone 7 meta tag (http://bowdenweb.com/wp/2011/05/meta-name-mobileoptimized-element.html) -->
<meta name="MobileOptimized" content="320" />

<!-- Windows Phone 8 meta (Pinned Sites title to be shortenend) -->
<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>" />

<!-- iPhone meta tag (width=device-width letterboxes on iPhone 5) -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- <meta name="viewport" content="width=device-width" /> -->
<!-- iPhone meta tag (Smart Banner) -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="white" />
<meta name="apple-mobile-web-app-title" content="<?php wp_title( '|', true, 'right' ); ?>" />

<!-- not sure what this is, found it in HTML5 Boilerplate -->
<meta http-equiv="cleartype" content="on" />