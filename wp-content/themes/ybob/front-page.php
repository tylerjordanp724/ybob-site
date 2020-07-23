<?php
/**
 * Template Name: Front Page Template
 * 
 * 
 */
get_header();
?>
<?php get_template_part('components/hero/hero');?>
<div class="main-content container--lg">
<!-- orgs go here -->
    
    <?php 
        $args = array('post_type' => 'ybob_org', 'posts_per_page' => -1);
        $orgs = new WP_Query($args);
    ?>
    <?php if($orgs->have_posts()):?>
        <div class="orgs container--lg grid-flex grid-flex--md">
            <?php while($orgs->have_posts()): $orgs->the_post();
                $org_title = get_field('display_title');
                $org_desc = get_field('description');
                $org_link = get_field('website_link');
            ?>
               <div class="card card--border-top col col-4 text--white">
                    <?php if(!empty($org_title)):?>
                        <h3><?php echo $org_title;?></h3>
                    <?php endif;?>
                    <?php if(!empty($org_desc)):?>
                        <p><?php echo $org_desc;?></p>    
                    <?php endif;?>
                    <?php if(!empty($org_link)):?>
                        <a href="<?php echo $org_link;?>" class="card-link">view website</a>
                    <?php endif;?>
               </div>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    <?php else:?>
        <h2 class="text-align--center text--white">There are no listings avialble. Please come back later!</h2>
    <?php endif;?>

   
</div>
<?php get_footer();?>