<?php
/**
 * @file
 * Contains \Drupal\rating\Form\ratingForm.
 */
namespace Drupal\rating\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RatingForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'rating_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => t(' Name:'),
      '#required' => TRUE,
    );

    $form['feedback'] = array(
      '#type' => 'radios',
      '#title' => t('Rating'),
	  '#options' => array( '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'),
      '#default_value' => '1',
      '#required' => TRUE,
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    drupal_set_message($this->t('@name ,Your feedback is being submitted!', array('@name' => $form_state->getValue('name'))));

  }
}