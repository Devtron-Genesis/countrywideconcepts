<?php

/**
 * @file
 * Default theme implementation to display a term.
 *
 * Available variables:
 * - $name: (deprecated) The unsanitized name of the term. Use $term_name
 *   instead.
 * - $content: An array of items for the content of the term (fields and
 *   description). Use render($content) to print them all, or print a subset
 *   such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $term_url: Direct URL of the current term.
 * - $term_name: Name of the current term.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - taxonomy-term: The current template type, i.e., "theming hook".
 *   - vocabulary-[vocabulary-name]: The vocabulary to which the term belongs to.
 *     For example, if the term is a "Tag" it would result in "vocabulary-tag".
 *
 * Other variables:
 * - $term: Full term object. Contains data that may not be safe.
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $page: Flag for the full page state.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the term. Increments each time it's output.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_taxonomy_term()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<div id="taxonomy-term-<?php print $term->tid; ?>" class="<?php print $classes; ?>">

    <?php if (!$page): ?>
        <h2><a href="<?php print $term_url; ?>"><?php print $term_name; ?></a></h2>
    <?php endif; ?>

    <div class="content">

        <?php //print render($content); ?><pre>
        <?php var_dump($content); ?></pre>



        <div class="portfolio-item project-item mix col-xs-12 col-sm-6">

            <div class="portfolio-image">
                <?php if (isset($content['field_products_image'])) : ?>
                    <?php print render($content['field_products_image']->content); ?>
                <?php endif; ?>

                <?php if (isset($fields['title'])) : ?>
                    <div class="portfolio-overlay">
                        <a href="<?php print render($content['path']->content); ?>" class="overlay-link">
                            <div class="vertical-center">

                                <ul>
                                    <li><span>Location: </span> <?php print render($content['field_projects_location']->content); ?></li>
                                    <li><span>Products Used: </span> <?php print render($content['field_projects_tags']->content); ?></li>
                                </ul>
                            </div>
                        </a>
                    </div> <!-- /portfolio-overlay -->
                <?php endif; ?>
            </div> <!-- /portfolio-image -->

        </div>
        <div class="portfolio-item project-item mix col-xs-12 col-sm-6">
            <h6 class="portfolio-title"><?php print render($content['title']->content); ?></h6>
            <div class="summary">
                <?php print render($content['field_products_summary']->content); ?>
                <a href="#" class="showmore">show more</a>
            </div>
            <div class="description">
                <?php print render($content['body']->content); ?>
                <a href="#" class="showless">show less</a>
            </div>

        </div>




    </div><!-- end of content -->






</div>


