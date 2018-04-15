<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sendeturm
 */

get_header(); ?>

	<?php 
		if(get_theme_mod("sendeturm_home_as_blog", true) == false) {
			get_template_part('template-parts/partial', 'subscribebar');
		}
	?>

	<div id="main-content" class="container">
		<main id="main">

		<?php
		if (have_posts()) :

			the_post();
			get_template_part('template-parts/content', 'page');

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			
			//the_posts_navigation();
		else :
			get_template_part('template-parts/content', 'none');
		endif;
		?>
		</main>
	</div>

<?php

#get_sidebar();

get_footer();
