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
      <img src="//placehold.it/60x60" class="social-icon">
     </div>
     <div class="column">
      <img src="//placehold.it/60x60" class="social-icon">
     </div>
     <div class="column">
      <img src="//placehold.it/60x60" class="social-icon">
     </div>
     <div class="column">
      <img src="//placehold.it/60x60" class="social-icon">
     </div>
     <div class="column">
      <img src="//placehold.it/60x60" class="social-icon">
     </div>
     <div class="column">
      <img src="//placehold.it/60x60" class="social-icon">
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
 </footer>
 <!-- #colophon -->
</div>
</div>
<!-- #page -->

<?php wp_footer(); ?>

 </body>

 </html>
