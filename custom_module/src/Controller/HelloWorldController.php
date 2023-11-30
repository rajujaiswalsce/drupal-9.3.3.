<?php

namespace Drupal\custom_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An custom_module controller.
 */
class HelloWorldController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function welcome() {
    $service = \Drupal::service('custom_module.say_hello');
    // dsm($service);
    // dsm($service->serviceMyName("raju"));
    $build = [
      '#markup' => $this->t('Jai Shree Ram'),
    ];
    return $build;
  }

}