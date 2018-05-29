<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php if (!empty($title)): ?>
  <h2><?php print $title; ?></h2>
  <?php else: ?>
  <div class="news-page view-header"><h2>News</h2></div>
<?php endif; ?>

<?php foreach ($rows as $id => $row): ?>
  <?php print $row; ?>
<?php endforeach; ?>