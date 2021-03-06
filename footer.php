<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package joeq
 */

?>

	</div>
<!-- #content -->
<div class="site-footer">
 <footer id="colophon" class="site-footer" role="contentinfo">
  <div class="row footer-row">
   <div class="large-3 medium-3 small-3 columns">
    <div class="footer-logo">
     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() ?>/images/footer-logo.png" border="0" alt="Joe Querin Footer Logo"></a>
    </div>
   </div>
   <div class="large-6 medium-6 hide-for-small-only columns">
    <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
   </div>
   <div class="large-3 medium-3 small-3 columns">
    <div class="row small-up-1, medium-up-3 large-up-3">
     <div class="column">
      <a href="https://www.linkedin.com/in/jquerin" target="_blank"><img src="/wp-content/themes/joeq/images/linkin-btn.png" class="social-icon"></a>
     </div>
     <div class="column">
      <a href="https://profiles.wordpress.org/joecue" target="blank"><img src="/wp-content/themes/joeq/images/wordpress-btn.png" class="social-icon"></a>
     </div>
					<div class="column">
      <a href="https://github.com/joecue" target="_blank"><img src="/wp-content/themes/joeq/images/github-btn.png" class="social-icon"></a>
     </div>
     <div class="column">
      <a href="https://www.behance.net/joecue" target="_blank"><img src="/wp-content/themes/joeq/images/behance-btn.png" class="social-icon"></a>
     </div>
     <div class="column">
      <a href="https://twitter.com/joequerin" target="_blank"><img src="/wp-content/themes/joeq/images/twitter-btn.png" class="social-icon"></a>
     </div>
     <div class="column">
      <a href="https://www.instagram.com/joecue/" target="_blank"><img src="/wp-content/themes/joeq/images/instagram-btn.png" class="social-icon"></a>
     </div>

    </div>
   </div>
  </div>
  <div class="row">
   <div class="large-12 medium-12 small-12 columns">
    <div class="site-info">
     <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'joeq' ) ); ?>">
      <?php printf( esc_html__( 'Proudly powered by %s', 'joeq' ), 'WordPress' ); ?>
     </a>
     <span class="sep"> | </span>
     <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'joeq' ), 'joeq', '<a href="http://joequerin.com" rel="designer">Joe Querin</a>' ); ?>
    </div>
    <!-- .site-info -->
   </div>
  </div>
  <div class="row">
   <div class="large-12 medium-12 small-12 columns">
    <p class="footer">All photos of Joe, courtesy of <a href="http://www.qcrewphotography.com" target="_blank">Q Crew Photography, Ltd.</a></p>
   </div>
  </div>
 </footer>
 <!-- #colophon -->
</div>
</div>
<!-- #page -->

<?php wp_footer(); ?>

 </body>

 </html>
