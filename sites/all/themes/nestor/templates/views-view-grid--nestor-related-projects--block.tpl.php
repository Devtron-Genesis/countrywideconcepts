<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<div id="grid" class="row">
<!--    <div class="flex-bullet-slider">-->
<!--        <ul class="slides">-->
    <?php foreach ($rows as $row_number => $columns): ?>
        <?php foreach ($columns as $column_number => $item): ?>
<!--            <li --><?php //if ($classes_array[$column_number]) { print ' class="' . $classes_array[$column_number] .'"';  } ?>
            <?php print $item; ?>
<!--            </li> -->
        <?php endforeach; ?>
    <?php endforeach; ?>
<!--        </ul> </div> -->
</div>
