<?php


namespace Drupal\rating_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class RatingModule extends BlockBase {

  public function build() {
    return [
      '#markup' => $this->t('My, Rating, Block'),
    ];
  }
}