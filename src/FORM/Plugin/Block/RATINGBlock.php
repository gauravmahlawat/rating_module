<?php


namespace Drupal\rating_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

  class RatingModule extends BlockBase {

  public function build() {
    return array('#markup' => $this->t('My Rating Block'));
  }
}