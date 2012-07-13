<?php
 /*
 Template Name: Contact Form Popup
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="MSSmartTagsPreventParsing" content="true" />
  <meta http-equiv="Imagetoolbar" content="No" />
  <title>Contact Us</title>
  <style type="text/css">
  	body {background: #000; color: white; padding: 25px; font-family: 'Architects Daughter'}
	
  </style>
  <link rel='stylesheet' id='gforms_css-css'  href='<?php bloginfo('url'); ?>/wp-content/plugins/gravityforms/css/forms.css' type='text/css' media='all' />
  <script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/includes/js/jquery-142.js?ver=1.4.1'></script>
  <script type='text/javascript' src='<?php bloginfo('url'); ?>/wp-content/plugins/gravityforms/js/conditional_logic.js?ver=1.3.13.1'></script>
  </head>
<body>
  
 <?php the_post(); ?>

	<?php get_template_part( 'content', 'plainform' ); ?>
	 <?php wp_footer(); ?>
</body>
</html>