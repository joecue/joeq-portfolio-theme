<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package joeq
 */

?>


	<div class="column column-block" style="border-radius: 15px; padding: 5px; min-height: 300px; max-height: 300px; margin: 10px 15px; box-shadow: 0 0 25px #667788;">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <div style="text-align:center;">
     <?php if ( the_post_thumbnail('homepage_post_thumbnail') != '' ) :
         the_post_thumbnail('homepage_post_thumbnail');
      endif; ?>
     </div>
     <header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

						<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php joeq_posted_on(); ?>
						</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php 		
							the_excerpt( sprintf(
								/* translators: %s: Name of current post. */
								wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'joeq' ), array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							) );
						?>

						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'joeq' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->
			</div>
