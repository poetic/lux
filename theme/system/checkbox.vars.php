<?php
/**
 * @file
 * checkbox.vars.php
 */

/**
 * Implements hook_preprocess_checkbox().
 */
function lux_preprocess_checkbox(&$vars) {
  $vars['element']['#attributes']['class'][] = 'filled-in';
  if (isset($vars['element']['#value'])) {
    if ($class = _lux_colorize_button($vars['element']['#value'])) {
      $vars['element']['#attributes']['class'][] = $class;
    }
  }
}
