<?php
/**
 * Compoment Name: Hero
 * 
 * 
 */
global $wp;
$curr_slug = add_query_arg(array(), $wp->request);
$header_text = get_field('header_text', 'option');
?>

<div class="hero">
    <div class="hero-wrapper align-vert-center row-inside--md">
        <div class="hero-inner hero-inner--center container--sm text-align--center text--blue-3">
            <div class="hero-title-row row-btm-outside--sm">
                <span class="f-label">phl</span>
                <h1 class="f-title">Black Owned</h1>
                <span class="f-label">businesses</span>
            </div>
            <?php if(!empty($header_text)):?>
                <div class="hero-text col-inside--md row-btm-outside--sm">
                    <?php echo $header_text;?>
                </div>
            <?php endif;?>
            <a href="<?php if($curr_slug === ''){echo get_site_url().'/submissions';}elseif($curr_slug === 'submissions'){echo get_option('home');}?>" class="btn btn--center <?php if($curr_slug === 'submissions'){ echo 'btn--back-btn';}?>"><?php if($curr_slug === ''){echo 'submit a business';}elseif($curr_slug === 'submissions'){echo '<span class="back-arrow"></span>'.'back';}?></a>
        </div>
    </div>
</div>