<?php
/**
 * @file
 * common.inc
 *
 * Contains common functionality for the entire base theme.
 */

/**
 * Auto-rebuild the theme registry during theme development.
 */
if (theme_get_setting('lux_rebuild_registry') && !defined('MAINTENANCE_MODE')) {
  // Rebuild .info data.
  system_rebuild_theme_data();
  // Rebuild theme registry.
  drupal_theme_rebuild();
}