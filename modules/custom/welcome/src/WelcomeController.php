<?php
/**
 * @file
 * Contains \Drupal\welcome\WelcomeController.
 */

namespace Drupal\welcome;

use Drupal\Core\Controller\ControllerBase;

class WelcomeController extends ControllerBase {
  public function content() {
    return array(
        '#markup' => '' . t('Welcome Drupal!') . '',
    );
  }
}
