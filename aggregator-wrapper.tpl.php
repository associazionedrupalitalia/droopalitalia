<?php

/**
 * @file
 * Default theme implementation to wrap aggregator content.
 *
 * Available variables:
 * - $content: All aggregator content.
 * - $page: Pager links rendered through theme_pager().
 *
 * @see template_preprocess()
 * @see template_preprocess_aggregator_wrapper()
 *
 * @ingroup themeable
 */
?>
<div id="aggregator">
  <?php print $content; ?>
<?php 
/*$query = db_select("aggregator_category", "c");
$query
  ->condition('c.cid', 1)
  ->fields('c', array('description'));
$result = $query->execute();
print $result;*/
print $aggregator_description;
?>
  <?php print $pager; ?>
</div>
