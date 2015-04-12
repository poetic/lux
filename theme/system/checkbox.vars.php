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

  // Need to figure out how to apply the following structure around a checkbox
  // <div class="switch">
  //    <label for="thischeckbox">
  //      OFF
  //      <input type="checkbox" id="thischeckbox" />
  //      <span class="lever"></span>
  //      ON
  //    </label>
  //  </div>
  //
  // if(theme_get_setting('lux_toggle_selection')) {
  //   $vars['theme_hook_suggestions'][] = 'checkbox-toggle.tpl.php';
  // }

}
