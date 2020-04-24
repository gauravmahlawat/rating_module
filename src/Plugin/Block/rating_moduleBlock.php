<?php


namespace Drupal\RatingModule\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\RatingModule\Form\RatingModuleclass;

class RatingModule extends BlockBase {

  public function build() {
    return [
      '#markup' => $this->t('My, Rating, Block'),
    ];
  }
}
