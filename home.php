<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package joeq
 */

get_header(); ?>
 <div id="content" class="site-content">

  <div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
    <div class="row">
     <div class="large-12 medium-12 show-for-medium-up columns site-spacer">&nbsp;</div>
    </div>
    <div class="site-hero-section">
     <div class="row collapse">
      <div class="large-5 medium-5 small-12 columns">
       <div class="site-home-block">
        <?php if ( is_front_page() && is_home() ) : ?>
         <p class="site-title-pre">Hello, I'm</p>
         <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
         <?php else : ?>
          <p class="site-title">
           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
           </a>
          </p>
          <?php endif;

    $description = get_bloginfo( 'description', 'display' );
    if ( $description || is_customize_preview() ) : ?>
           <p class="site-description">
            <?php echo $description; /* WPCS: xss ok. */ ?>
           </p>
           <?php endif; ?>
            <div class="site-hero-learn-more-block">
             <a href="#skills-section"><h3 class="site-hero-learn">Learn More</h3><img src="<?php echo get_template_directory_uri() ?>/images/down-arrow.png" border="0" alt="Learn more below"></a>
            </div>
       </div>
       <!-- .site-branding -->
      </div>
      <div class="large-7 medium-7 small-12 hide-for-small-only columns">
       <img src="<?php echo get_template_directory_uri() ?>/images/me-large.png" border=0 alt="Photo of Joe Querin">
      </div>
     </div>
    </div>
     <?php get_template_part( 'template-parts/content', 'skills' ); ?>
    <div class="row">
     <div class="large-12 medium-12 small-12 columns contact-me-spacers">&nbsp;</div>
    </div>
    <div class="contact-me-section">
     <div class="row">
      <div class="large-12 medium-12 small-12 columns text-center">
        <div class="contact-me-block">
          <p>No two websites are the same.  Why should the design be then?</p>
          <a href="mailto:joecue@gmail.com" alt="Email Link" class="button">Contact Me</a>
        </div>
      </div>
     </div>
    </div>
    <div class="row">
     <div class="large-12 medium-12 small-12 columns contact-me-spacers">&nbsp;</div>
    </div>
    <div class="about-me-section">
     <div class="row">
      <div class="large-12 medium-12 small-12 columns">
       <h2 class="homepage text-center">About Me</h2>
       <img src="<?php echo get_template_directory_uri() ?>/images/about-me-circle.jpg" border="0" class="float-center">
       <p class="my-name text-center">Joe Querin</p>
       <p class="my-title text-center">Technical Creative</p>
      </div>
     </div>
     <div class="row">
      <div class="large-7 large-centered medium-7 medium-centered small-12 columns">
       <p class="about-me-blurb">I am Joe Querin, a thirty-six year old designer/developer from northern OH.  I have been in the field of Web Design and Development for 17 years.  I have a passion for creating and designing challenging, yet intituitive web applications and sites.</p>
       <p class="about-me-blurb"><a href="/aboutme">Learn more about me here.</a></p>
      </div>
     </div>
     <div class="row">
      <div class="large-12 medium-12 small-12 columns">
       <p class="not-a-job text-center">Making web sites both beautiful and functional is not just a job...</p>
       <p class="who-i-am text-center">...it's part of who I am.</p>
       <a href="/portfolio" class="button float-center">My Portfolio</a>
      </div>
     </div>
    </div>
    <div class="latest-articles-section">
     <div class="row">
      <div class="large-12 medium-12 small-12">
       <h2 class="homepage text-center">Latest Articles</h2>
        <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <?php
         /* Include the Post-Format-specific template for the content.
          * If you want to override this in a child theme, then include a file
          * called content-___.php (where ___ is the Post Format name) and that will be used instead.
          */
         get_template_part( 'template-parts/content', 'home' );
        ?>

        <?php endwhile; ?>

        <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>       
      </div>
     </div>
    </div>
<?php get_sidebar('home-bottom') ?>


   </main>
   <!-- #main -->
  </div>
  <!-- #primary -->

  <?php get_footer(); ?>