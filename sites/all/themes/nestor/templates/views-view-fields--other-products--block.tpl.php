<?php
/**
 * Created by PhpStorm.
 * User: remotestaff
 * Date: 12/2/16
 * Time: 11:22 AM
 */
?>


<?php
// getting the catgory path
//$category_path = '/'.drupal_get_path_alias($row->field_field_products_category[0]['rendered']['#href']);
// getting the category name
$raw_category_name = strip_tags($fields['name']->content);

$stripCategory = str_replace('amp;', '', strtolower($raw_category_name));
$stripCategory = str_replace('& ', '', strtolower($stripCategory));
$stripCategory = str_replace(' ', '-', strtolower($stripCategory));

$stripUrlCategory = str_replace('&-', '', strtolower(arg(2)));
//echo $stripUrlCategory.'=='.$stripCategory.'<br>';


//$stripCategory = str_replace(' ', '-', strtolower($raw_category_name);
$category_path = '';
$healthCare = 'health care & hospital curtains';

$raw_category_name = strtolower($raw_category_name);
// echo $raw_category_name.' == '.$healthCare.'<br>';
if( $raw_category_name == $healthCare ):
    echo 'equal';
    $category_path = '/products/category/health-care-&-hospital-curtains';
else:
    $category_path = '/products/category/'.$stripCategory;
endif;
/*
//if( $stripCategory != $stripUrlCategory ): ?>

<div class="portfolio-item project-item mix col-xs-12 col-sm-4">

    <div class="portfolio-image">
        <?php if (isset($fields['field_cetegory_image'])) : ?>
            <?php print render($fields['field_cetegory_image']->content); ?>
        <?php endif; ?>

        <?php if (isset($fields['name'])) : ?>
            <div class="portfolio-overlay">
                <a href="<?php print render($category_path); ?>" class="overlay-link">
                    <div class="vertical-center other-product-category-name">
                        <?php print render($fields['name']->content); ?>
                    </div>
                </a>
            </div> <!-- /portfolio-overlay -->
        <?php endif; ?>
    </div> <!-- /portfolio-image -->

</div>
*/?>
<?php //endif; ?>


<?php
// Replace part of the path of the url to the custom url from views page
$replace = 'category';
$url = str_replace('/products-category/', '/' . $replace . '/', strip_tags($fields['path']->content));
$aliasUrl = $url;
if( $stripCategory != $stripUrlCategory ):
    if (isset($fields['field_cetegory_image'])) : ?>
        <div class="portfolio-item project-item mix col-xs-12 col-sm-4">
        <a href="<?php print $aliasUrl; ?>">
            <div class="our-work-1-image">
                <?php print $fields['field_cetegory_image']->content; ?>
                <div class="our-work-1-overlay">
                    <p><?php print $fields['name']->raw; ?></p>
                </div> <!-- /our-work-1-overlay -->
            </div> <!-- /our-work-1-image -->
        </a>
        </div>
    <?php endif; ?>
<?php endif; ?>
