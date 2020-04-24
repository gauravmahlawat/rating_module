<?php
/**
 * @file
 * Contains \Drupal\article\Plugin\Block\FeedbackBlock.
 */

namespace Drupal\src\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'feedback' block.
 *
 * @Block(
 *   id = "feedback_block",
 *   admin_label = @Translation("Feedback block"),
 * )
 */
class FeedbackBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\rating\Form\ratingForm');

    return $form;
   }
}