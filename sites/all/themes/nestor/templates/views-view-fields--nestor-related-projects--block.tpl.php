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
<div class="portfolio-item project-item mix col-xs-12 col-sm-4">
    <?php
    $nodeurl = strip_tags($fields['path']->content);
    $node_title = strip_tags($fields['title']->content);
    ?>
    <a href="<?php print render($nodeurl); ?>">
        <div class="portfolio-image">
            <?php if (isset($fields['field_projects_image'])) : ?>
                <?php print render($fields['field_projects_image']->content); ?>
            <?php endif; ?>

            <?php if (isset($fields['title'])) : ?>
                <div class="portfolio-overlay">
                        <div class="vertical-center">
                            <h6 class="portfolio-title"><?php print render($node_title); ?></h6>
                            <ul>
                                <li><span>Location: </span> <?php print render($fields['field_projects_location']->content); ?></li>
                                <li><span>Products Used: </span> <?php print render($fields['field_projects_tags']->content); ?></li>
                            </ul>
                        </div>
                </div> <!-- /portfolio-overlay -->
            <?php endif; ?>
        </div> <!-- /portfolio-image -->
    </a>
</div> <!-- /portfolio-item -->
