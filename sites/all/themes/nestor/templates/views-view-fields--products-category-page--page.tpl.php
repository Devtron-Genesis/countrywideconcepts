<?php
/**
 * Created by PhpStorm.
 * User: remotestaff
 * Date: 12/2/16
 * Time: 11:22 AM
 */
?>

<div class="portfolio-item project-item mix col-xs-12 col-sm-6">

    <div class="portfolio-image">
        <?php if (isset($fields['field_products_image'])) : ?>
            <?php print render($fields['field_products_image']->content); ?>
        <?php endif; ?>
    </div> <!-- /portfolio-image -->

</div>
<div class="portfolio-item project-item mix col-xs-12 col-sm-5 col-sm-push-1 last-child">
    <h6 class="portfolio-title"><?php print render($fields['title']->raw); ?></h6>
    <div class="description">
        <?php print render($fields['body']->content); ?>
    </div>
    <?php
        // strip out the space and special character of a category
        $raw_category_name = strip_tags($fields['field_product_range']->content);
        $stripCategory = str_replace('amp;', '', strtolower($raw_category_name));
        $stripCategory = str_replace('& ', '', strtolower($stripCategory));
        $stripCategory = str_replace(' ', '-', strtolower($stripCategory));
        $url = '/furniture/'.$stripCategory;
    ?>
    <?php if($stripCategory !=''): ?>
        <a href="<?php print render($url); ?>" class="see-product-range">See Product Range</a>
    <?php endif; ?>
</div>