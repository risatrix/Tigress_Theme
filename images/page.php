<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
				<div id="announcements">
				<?php the_block('Announcements')?>
				</div>
			
				
				<div id ="first_right_pic" class="photo">
				<img src="/wp-content/themes/Tigress_Theme/images/tigress_interior.jpg">
				
				</div>
				
				<div id="second_right_pic" class="photo">
				<img src="/wp-content/themes/Tigress_Theme/images/tigress_bar.jpg">
				
				</div>
				
				<div id="menu">
					
					<h1 id = "logo">
					The Tigress Pub
					</h1>
								<div id ="mobile">
								Wed-Sun, 4-11ish<br/>
								100 N. Loop<br/>
								(512) 600-3232<br/> 
								<a href="http://g.co/maps/4ngpd" title="link to the Google Map">Google Map</a>
								</div><!--end mobile-->
								
					<h1>Cocktail Menu</h1>
					
				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
				</div><!--end menu-->
<?php get_footer(); ?>