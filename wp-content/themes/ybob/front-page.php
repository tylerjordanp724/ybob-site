<?php
/**
 * Template Name: Front Page Template
 * 
 * 
 */
get_header();
?>
<div class="main-content">
<!-- orgs go here -->
    
    <?php get_template_part('components/orgs/orgs');?>
   
</div>
<?php get_footer();?>