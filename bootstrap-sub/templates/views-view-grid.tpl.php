<?php
/**
 * @file
 * Template to display a view as a table.
 *
 * Available variables:
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 *
 * @ingroup templates
 */
?>


<div <?php if ($classes): print 'class="' . 'knowledge-container col-xs-12 ' .  $classes . '" '; endif; ?><?php print $attributes; ?>> 
    <?php 
        $count = 1;
        foreach ($rows as $row_count => $row): 
        ?>
        <?php foreach ($row as $field => $content): ?>

        <?php  if ($count % 4 == 1): ?> 
          <div class="row">
        <?php endif; ?>

                  <?php if (!empty($content)): ?>
                    <div class="item col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <?php  print $content; ?>
                    </div>
                  <?php endif; ?>
                  
          <?php  if ($count % 4 == 0): ?> 
          </div>
          <?php endif; ?>
        <?php $count++; ?>

        <?php endforeach; ?>
    <?php endforeach; ?>
</div>

