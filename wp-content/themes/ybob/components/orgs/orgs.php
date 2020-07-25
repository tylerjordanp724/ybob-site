<?php
/**
 * Component Name: Orgs
 * 
 * 
 */
?>

<?php 
    $args = array('post_type' => 'ybob_org', 'posts_per_page' => -1);
    $orgs = new WP_Query($args);
?>
<?php if($orgs->have_posts()):?>
    <div class="orgs container--lg grid-flex grid-flex--sm">
        <?php while($orgs->have_posts()): $orgs->the_post();
            $org_title = get_field('display_title');
            $org_desc = get_field('description');
            $org_link = get_field('website_link');
            $org_category = get_the_category();
        ?>
            <div class="card card--border-top col col-sm-6 col-md-4 row-btm-outside--sm text--white">
                <div class="card-inner row-inside--sm">
                    <?php if(!empty($org_category)):?>
                        <span class="f-label f-label--sm"><?php echo $org_category[0]->cat_name;?></span>    
                    <?php endif;?>
                    <?php if(!empty($org_title)):?>
                        <h3><?php echo $org_title;?></h3>
                    <?php endif;?>
                    <?php if(!empty($org_desc)):?>
                        <p><?php echo $org_desc;?></p>    
                    <?php endif;?>
                    <?php if(!empty($org_link)):?>
                        <a href="<?php echo $org_link;?>" class="card-link text--white">
                            Website
                            <span class="underline"></span>
                        </a>
                    <?php endif;?>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata();?>
    </div>
<?php else:?>
    <h2 class="text-align--center text--white">There are no listings avialble. Please come back later!</h2>
<?php endif;?>