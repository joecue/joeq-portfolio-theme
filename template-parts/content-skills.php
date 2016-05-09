<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package joeq
 */

?>
    <div class="row">
     <div class="large-12 medium-12 small-12 columns">
      <a name="skills-section"></a>
      <h2 class="text-center homepage">My Skills</h2>
      <ul class="tabs" data-tabs id="skills-tabs">
       <li class="tabs-title is-active"><a href="#pnlFrontEnd" aria-selected="true">Front End</a></li>
       <li class="tabs-title"><a href="#pnlBackEnd">Back End</a></li>
      </ul>
      <div class="tabs-content" data-tabs-content="skills-tabs">
       <div class="tabs-panel is-active" id="pnlFrontEnd">
        <div class="row small-up-1 medium-up-3">
         <div class="column text-center">
          <img src="//placehold.it/300x300" class="" alt="HTML 5 Badge">
          <h4 class="skills">Clean HTML</h4>
          <p>Writing standards specific HTML has always been important to me. I utilitize various validators to ensure all HTML and CSS is current and necessary. I don't like bloat in my markup, or code, so I always strive to be as streamlined as possible.</p>
         </div>
         <div class="column text-center">
          <img src="//placehold.it/300x300" class="" alt="CSS 3 Badge">
          <h4 class="skills">Cross Browser CSS</h4>
          <p>Styling used to be so simplistic, now CSS is so powerful with the advent of Sass as well as CSS 2 and 3. Writing CSS that works not only in multiple browser but also multiple platforms has been a focus of mine for a long time.</p>
         </div>
         <div class="column text-center">
          <img src="//placehold.it/300x300" class="" alt="Artist Pallet Icon">
          <h4 class="skills">Graphic Design</h4>
          <p>Colors, line thicknesses, typography, white space... Design is as much of a solution as code can be. Being able to code as well as design allows me to know what is possible with code, before I design something that cannot be done.</p>
         </div>
        </div>
       </div>
       <div class="tabs-panel" id="pnlBackEnd">
        <div class="row small-up-1 medium-up-3">
         <div class="column text-center">
          <img src="//placehold.it/300x300" class="" alt="Source Code Icon">
          <h4 class="skills">Multiple Languages</h4>
          <p>Writing code is more than just functions, methods and properties. Programming involves logic, solving problems, and user experience. Understanding multiple languages allows me to pick the best language to solve the problem.</p>
         </div>
         <div class="column text-center">
          <img src="//placehold.it/300x300" class="" alt="Server Icon">
          <h4 class="skills">Server Admin</h4>
          <p>Windows, Linux.. doesn't really matter. Both exist to aid a developer to solve problems. Understanding not only how they work, but how to fix, allows me to create a better solution. Knowing what the platform is capable of, allows me to design a solution that will work as expected.</p>
         </div>
         <div class="column text-center">
          <img src="//placehold.it/300x300" class="" alt="Database Icon">
          <h4 class="skills">Database Design</h4>
          <p>Databases do more than just hold information. They are an integral part of a solution. Creating tables and columns are easy, but designing a table or database that solves a problem is crucial in the success of a project.</p>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
			the_content( sprintf(
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

	<footer class="entry-footer">
		<?php joeq_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
