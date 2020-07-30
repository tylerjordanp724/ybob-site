<?php
/**
 * Template Name: Submissions Template
 * 
 * 
 */
get_header();
?>
<div class="main-content">
    <div class="container--sm col-inside--md">
        <?php echo do_shortcode('[ninja_form id=3]');?>
    </div>
</div>
<?php get_footer();?>