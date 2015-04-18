<?php
/**
 * @file
 * file-widget.func.php
 */

/**
 * Overrides theme_file_widget().
 */
function lux_file_widget($variables) {
  $element = $variables['element'];
  $output = '';
  // The "form-managed-file" class is required for proper Ajax functionality.
  // $output .= '<div class="file-widget form-managed-file clearfix">';
  $output .= '<div class="file-field input-field">';
  $output .= '<input class="file-path validate" type="text"/>';
  $output .= '<div class="btn">';
  $output .= '<span>File</span>';
  $output .= '</div>';

  if ($element['fid']['#value'] != 0) {
    // Add the file size after the file name.
    $element['filename']['#markup'] .= ' <span class="file-size">(' . format_size($element['#file']->filesize) . ')</span> ';
  }
  $output .= drupal_render_children($element);
  $output .= '</div>';

  return $output;
}