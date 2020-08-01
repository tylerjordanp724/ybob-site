<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ybob-site
 */

?>

	<footer class="site-footer row-inside--sm">
		<div class="site-info container--lg grid-flex grid-flex--md justify--between align--center text--blue-3 f-body f-body--sm">
			<div class="col col-md-4 row-btm-outside--sm text-align--center text-align--left-md">&copy;<?php echo date('Y');?></div>
			<div class="col col-md-4 row-btm-outside--sm text-align--center">Donate</div>
			<div class="col col-md-4 row-btm-outside--sm text-align--center text-align--right-md">Created by <a href="">@crystalfolkes</a> <a href="">@iamtylerjordan</a> <a href="">@authentic_spic3</a></div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
