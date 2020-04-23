<?php
/**
  * @file
  * Contains \Drupal\RatingModule\Form\RatingModuleForm
  */
  namespace Drupal\RatingModule\Form;

  use Drupal\Core\Database\Database;
  use Drupal\Core\Form\FormBase;
  use Drupal\node\Entity\Node;
  use Drupal\Core\FormStateInterface;
  /**
    * Provide an input form.
    */
  class RatingModuleForm extends FormBase {
    /**
      * (@inheritdoc)
      */
    public function getFormId() {
        return 'RatingModule_new_form';
        } 
        /**
          * (@inheritdoc)
          */
          public function buildForm(array $form, FormStateInterface $form_state) { 
            $form['fname'] = array(
                '#type' => 'textfield',
                /*'#title' => t('First Name'),*/
                '#required' => TRUE,
                '#attributes' => array(
                'placeholder' => t('First Name *'),
                'class' => array('AIpopupFormInput')
                ),
                /* '#default_value' => 'First Name',
                '#description' => 'Please enter your first name',
                '#maxlength' => 20,*/
                );
                $form['lname'] = array(
                '#type' => 'textfield',
                /*'#title' => t('Last Name'),*/
                '#required' => TRUE,
                '#attributes' => array(
                'placeholder' => t('Last Name *'),
                'class' => array('AIpopupFormInput')
                ),
                );     
                 $form['RatingModule'] = array(
                    '#type' => 'radios',
                    '#title' => t('Feedback'),
                    '#options' => array( '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'),
                    '#default_value' => '1',
                    '#required' => TRUE,
                    );
                    $form['submit_button'] = array(
                        '#type' => 'submit',
                        '#value' => t('SUBMIT'),
                        );
                        
                        return $form;
                        }    
                        public function submitForm(array &$form, FormStateInterface $form_state) {
                            $fname = $form_state['values']['fname'];
                            $lname = $form_state['values']['lname'];
                            $RatingModule = $form_state['values']['Feedback'];

                            $send = db_insert('send_me_advisor')
                            ->fields(array(
                           'Feedback' => $RatingModule,
                           'first_name' => $fname,
                           'last_name' => $lname,
                            ));
                            $result = $send->execute();
                            }
                            }
