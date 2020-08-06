<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ybob-site
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Uplift The Block is a Philadelphia-based, user-friendly directory list for Black-owned businesses and entrepreneurs near you.">
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/fb-share.jpg" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="screen-reader" href="#primary"><?php esc_html_e( 'Skip to content', 'ybob-site' ); ?></a>
	<?php get_template_part('components/hero/hero');?>
