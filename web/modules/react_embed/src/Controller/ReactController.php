<?php

namespace Drupal\react_embed\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class ReactController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function content() {
    $build = [
      '#theme' => 'react_embed',
    ];
    return $build;
  }

}
