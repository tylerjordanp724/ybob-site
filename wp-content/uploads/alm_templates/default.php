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