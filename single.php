<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package joeq
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
  <div class="page-content">
		 <div class="row">
    <div class="large-8 medium-8 small-12 columns">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>
					<div style="border-top: solid 1px #d3d3d3; width:100%;">&nbsp;</div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
     </div>
				<div class="large-4 medium-4 small-12 columns">
				<?php get_sidebar(); ?>
				</div>
    </div>
   </div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
