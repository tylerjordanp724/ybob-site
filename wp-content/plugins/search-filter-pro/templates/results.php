<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

// If this file is called directly, abort.



if($query->have_posts()):?>
    <div class="orgs container--lg grid-flex grid-flex--sm">
        <?php while($query->have_posts()): $query->the_post();
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