<?php

/**
 * @file
 * Contains \Drupal\entity_browser\EntityBrowserWidgetInterface.
 */

namespace Drupal\entity_browser;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines the interface for entity browser widgets.
 */
interface EntityBrowserWidgetInterface extends PluginInspectionInterface {

  /**
   * Returns the widget label.
   *
   * @return string
   *   The widget label.
   */
  public function label();

  /**
   * Returns the unique ID representing the widget.
   *
   * @return string
   *   The widget ID.
   */
  public function getUuid();

}
