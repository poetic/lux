<?php
/**
 * @file
 * views.vars.php
 */

/**
 * Implements hook_preprocess_views_view_table().
 */
function lux_preprocess_views_view_table(&$vars) {
  $vars['classes_array'][] = 'hoverable';
  $count = 0;
  foreach ($vars['rows'] as $num => $row) {
  	$vars['row_classes'][$num] = array();
  	$vars['row_classes'][$num][] = 'card-panel';
  }
}