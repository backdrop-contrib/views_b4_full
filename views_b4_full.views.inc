<?php
/**
 * @file
 * Provide views data and handlers for views_b4_full module.
 */

/**
 * Implements hook_views_plugins().
 */
function views_b4_full_views_plugins() {
  return array(
    'style' => array(
      'flexviews' => array(
        'title' => t('views_b4_full'),
        'handler' => 'views_plugin_style_views_b4_full',
        'help' => t("Display content in views_b4_full"),
        'theme' => 'views_view_views_b4_full',
        'type' => 'normal',
        'path' => backdrop_get_path('module', 'views_b4_full'),
        'theme path' => backdrop_get_path('module', 'views_b4_full'),
        'uses row plugin' => TRUE,
        'uses row class' => TRUE,
        'uses grouping' => FALSE,
        'uses options' => TRUE,
      ),
    ),
  );
}

