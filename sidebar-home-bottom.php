<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package joeq
 */

if ( ! is_active_sidebar( 'home-sidebar' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area row small-up-1 medium-up-2" role="complementary">
	<?php dynamic_sidebar( 'home-sidebar' ); ?>
</div><!-- #secondary -->
