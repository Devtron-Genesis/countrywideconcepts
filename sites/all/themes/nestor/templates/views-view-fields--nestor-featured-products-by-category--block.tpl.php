<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<?php

    // get current node id
    $nid = $row->nid;

    //print_r("The node id is: ".$nid.'<br/>');
    $tid =db_query('SELECT tid FROM {taxonomy_index} WHERE nid = :nid',
            array(':nid' => $nid)
        )->fetchField();

    $term = taxonomy_term_load($tid); // load term object
    $term_uri = taxonomy_term_uri($term); // get array with path
    $term_title = taxonomy_term_title($term);
    $term_path = $term_uri['path'];
    $link = l($term_title,$term_path);

    // getting term alias path
    $aliasUrl = drupal_get_path_alias($term_uri['path']);

    // Replace part of the path of the url to the custom url from views page
    $replace = 'category';
    $url = str_replace('/products-category/', '/' . $replace . '/', $aliasUrl);
    $aliasUrl = $url;
?>


<?php if (isset($fields['field_products_image'])) : ?>
    <a href="<?php print $aliasUrl; //$fields['path']->content; ?>">
        <div class="our-work-1-image">
            <?php print $fields['field_products_image']->content; ?>
            <div class="our-work-1-overlay">
                <p><?php print $fields['field_products_category']->content; //print(t('Click to read more')); ?></p>
            </div> <!-- /our-work-1-overlay -->
        </div> <!-- /our-work-1-image -->
    </a>
<?php endif; ?>

<?php /*
<?php if (isset($fields['field_products_image'])) : ?>
    <a href="<?php print $fields['path']->content; ?>">
        <div class="our-work-1-image">
            <?php print $fields['field_products_image']->content; ?>
            <div class="our-work-1-overlay">
                <p><?php print $fields['field_products_category']->content; ?></p>
            </div> <!-- /our-work-1-overlay -->
        </div> <!-- /our-work-1-image -->
    </a>
<?php endif; ?>
*/?>

<?php /*
<div class="our-work-1-item-description">
    <?php if (isset($fields['title'])) : ?>
        <h6><?php print $fields['title']->content ;?></h6>
    <?php endif; ?>

    <?php if (isset($fields['created'])) : ?>
        <p class="text-color-theme"><small><?php print $fields['created']->content ;?></small></p>
    <?php endif; ?>
</div> <!-- /our-work-1-item-description -->
*/ ?>