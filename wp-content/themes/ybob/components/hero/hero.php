<?php
/**
 * Compoment Name: Hero
 * 
 * 
 */
$header_text = get_field('header_text', 'option');
?>

<div class="hero">
    <div class="hero-wrapper align-vert-center row-inside--lg">
        <div class="hero-inner hero-inner--center container--sm text-align--center text--white">
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
            <button class="btn btn--center">submit a business</button>
        </div>
    </div>
</div>