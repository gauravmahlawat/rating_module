<?php
/**
  * @file
  * Contains \Drupal\Ratingmodule\Form\RatingmoduleForm
  */
  namespace Drupal\Rating_module\Form;

  use Drupal\Core\Database\Database;
  use Drupal\Core\Form\FormBase;
  use Drupal\node\Entity\Node;
  use Drupal\Core\FormStateInterface;
  /**
    * Provide an input form.
    */
  class Rating_moduleform extends FormBase {
    /**
      * (@inheritdoc)
      */
    public function getFormId() {
        return 'Rating_module_new_form';
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
                 $form['Rating_module'] = array(
                    '#type' => 'radios',
                    '#title' => t('Feedback'),
                    '#options' => array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'),
                    '#default_value' => '1',
                    '#required' => TRUE,
                    );
                    $form['submit_button'] = array(
                        '#type' => 'submit',
                        '#value' => t('SUBMIT'),
                        );
                        
                        return $form;
                        }    
                        public function submitForm(array $form, FormStateInterface $form_state){
                            $fname = $form_state['values']['fname'];
                            $lname = $form_state['values']['lname'];
                            $Rating_module = $form_state['values']['Feedback'];

                            $send = db_insert('send_me_advisor')
                            ->fields(array(
                           'Feedback' => $Rating_module,
                           'first_name' => $fname,
                           'last_name' => $lname,
                            ));
                            $result = $send->execute();
                            }
                            public function block_info() {
                                $blocks = array();
                                $blocks['send_me_an_advisor_final'] = array(
                                'info' => t('Send me An advisor'),
                                );                                
                                return $blocks;
                                }
                                ?>