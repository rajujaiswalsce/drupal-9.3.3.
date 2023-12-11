<?php

namespace Drupal\timestamp_converter\Controller;

use Drupal\Core\Controller\ControllerBase;

class TimestampConverter extends ControllerBase {

  public function content() {
    return [
      '#markup' => $this->t('Timestamp converter website'),
    ];
  }

} 
