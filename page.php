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

	<section id="mid-column" class="col1">	
		
	<article id="announcements">
		<?php the_block('announcements')?>
	</article>	
		
	<article id="menu">
		<header>
			<h1 id = "logo">
			The Tigress Pub
			</h1>
		</header>	
						<div id ="mobile-info">
						Tues-Sun, 4-11ish<br/>
						100 N. Loop<br/>
						(512) 600-3232<br/> 
						<a href="http://g.co/maps/4ngpd" title="link to the Google Map">Google Map</a>
						</div><!--end mobile-->
						
			<h1>Cocktail Menu</h1>
			
		<?php the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>
		
		
		</article><!--end menu-->
	</section><!--end #mid-col-->

	<section id="left-column" class="col2">
		<?php the_block('info-content') ?>
		<?php the_block('left-photos') ?>

	</section>


	<section id="right-column" class="col3">
		<?php the_block('right-photos') ?>
	</section><!--end #right-sidebar-->

			
<?php get_footer(); ?>