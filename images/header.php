<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title>The Tigress Pub - Austin, TX - North Loop's Neighborhood Bar with Classic Cocktails and Beer On Tap!</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel='stylesheet' media="screen and (min-width: 401px) and (max-width: 1200px)" href="/wp-content/themes/Tigress_Theme/medium.css" />
<link rel ='stylesheet' media="screen and (max-device-width: 480px)" href="/wp-content/themes/Tigress_Theme/IP.css" />
<?php wp_head(); ?>
</head>

<body>
<div id="inner" class="hfeed">
		<header id="info-wrap" class="group">
				<hgroup id="info">
				<h3>100 W. North Loop </h3>
				<h3>Austin, TX 78751</h3>
				<h3>(512) 600-3232</h3> 
				<h3>Wed-Sun, 4 to 11-ish</h3>
				<h3>Pam@theTigressPub.com</h3><br />
				<a href="http://g.co/maps/4ngpd" title="link to the Google Map">Google Map here</a>
					<a href="https://www.facebook.com/#!/pages/The-Tigress/139422529429227" id="facebook_link">Find us on Facebook</a>
					<a href="http://twitter.com/#!/TigressPub" id="twitter_link">Find us on Twitter</a>
        		</hgroup>		
		</header>
		<div id="left_pic" class="photo">
		<img src="/wp-content/themes/Tigress_Theme/images/tigress_exterior.jpg">
		</div>

