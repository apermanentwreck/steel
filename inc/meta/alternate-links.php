<?php
/**
 * Steel alternate links
 *
 * @package WordPress
 * @subpackage Steel
 * @since Steel 1.0
 */

/* ----- Bitly Shortener ----- */
if ( get_settings_config( 'bitly' ) ) { ?>
	<link rel="shortlink" href="<?php echo bitly_shortlink(); ?>" />
<?php } ?>

<!-- Canonical -->
<link rel="canonical" href="<?php echo esc_url( home_url() ); ?>" />

<!-- RSS Feed / Alternate Links -->
<link rel="alternate" href="<?php echo get_feed_link(); ?>" title="RSS Feed for <?php bloginfo( 'name' ); ?>" type="application/rss+xml" />