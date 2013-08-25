<?php
/**
 * Steel stack exchange open id tags
 *
 * @package WordPress
 * @subpackage Steel
 * @since Steel 1.0
 */
?>

<!-- Open ID Provider tags -->
<link rel="openid2.provider" href="https://openid.stackexchange.com/openid/provider" />
<link rel="openid2.local_id" href="https://openid.stackexchange.com/user/<?php echo get_settings_config( 'stackexchange' ); ?>" />
