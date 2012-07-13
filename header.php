
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
?>
<!DOCTYPE html>
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
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]><script src="scripts/selectivizr.js"></script>  <![endif]-->  <!-- Adds CSS3 to IE6/7/8 !-->
<!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->  <!-- Adds media queries to IE6/7/8 !--><!--[endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>The Tigress Pub - Austin, TX - North Loop's Neighborhood Bar with Classic Cocktails and Beer On Tap!</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php wp_head(); ?>
<!-- Add Fancybox mousewheel plugin (this is optional) -->
<script type="text/javascript" src="wp-content/plugins//fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="/wp-content/plugins/fancybox/source/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="/wp-content/plugins//fancybox/source/jquery.fancybox.pack.js?v=2.0.6"></script>
<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="/wp-content/plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.2" type="text/css" media="screen" />
<script type="text/javascript" src="/wp-content/plugins/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>
<script type="text/javascript" src="/wp-content/plugins/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.0"></script>

<link rel="stylesheet" href="/wp-content/plugins/fancybox//source/helpers/jquery.fancybox-thumbs.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="/wp-content/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=2.0.6"></script>
<script>	
	$(document).ready(function() {
		$("a.fancybox").fancybox({
		'titlePosition'	: 'over'	
		});
		$("a.fancybox.ajax").fancybox({
			'type'  : 'iframe'
		});
	   });
</script>
</head>

<body>

<div class="colmask clearfix">	
	<div class="colmid clearfix"> 
		<div class="colleft">
		