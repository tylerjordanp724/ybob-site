<?php
/**
 * Template Name: Front Page Template
 * 
 * 
 */
get_header();
?>
<?php get_template_part('components/hero/hero');?>
<div class="main-content">
<!-- orgs go here -->
    
    <?php 
        $args = array('post_type' => 'ybob_org', 'posts_per_page' => -1);
        $orgs = new WP_Query($args);
    ?>
    <?php if($orgs->have_posts()):?>
        <div class="orgs">
            <?php while($orgs->have_posts()): $orgs->the_post();?>
                something
            <?php endwhile; wp_reset_postdata();?>
        </div>
    <?php endif;?>

   
</div>
<?php get_footer();?>