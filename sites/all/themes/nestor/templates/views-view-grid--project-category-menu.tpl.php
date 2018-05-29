<div id="grid" class="row">
    <?php foreach ($rows as $row_number => $columns): ?>
        <?php foreach ($columns as $column_number => $item): ?>
            <?php print $item; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div> <!-- /grid -->