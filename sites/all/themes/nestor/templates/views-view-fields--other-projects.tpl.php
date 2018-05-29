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


?>


<?php
// Replace part of the path of the url to the custom url from views page
$replace = 'category';
$url = str_replace('/projects-tags/', '/' . $replace . '/', strip_tags($fields['path']->content));
$aliasUrl = $url;
if( $stripCategory != $stripUrlCategory ):
    if (isset($fields['field_category_image'])) : ?>
        <div class="portfolio-item project-item mix col-xs-12 col-sm-4">
            <a href="<?php print $aliasUrl; ?>">
                <div class="our-work-1-image">
                    <?php print $fields['field_category_image']->content; ?>
                    <div class="our-work-1-overlay">
                        <p><?php print $fields['name']->raw; ?></p>
                    </div> <!-- /our-work-1-overlay -->
                </div> <!-- /our-work-1-image -->
            </a>
        </div>
    <?php endif; ?>
<?php endif; ?>
