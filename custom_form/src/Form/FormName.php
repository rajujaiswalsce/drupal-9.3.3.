<?php
/**
 * @file
 * Contains \Drupal\custom_form\Form\FormName.
 */
namespace Drupal\custom_form\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class FormName extends FormBase{
    public function getFormId(){
        return "resetForm";
    }
    public function buildForm(array $form, FormStateInterface $form_state){
        $form['student_name'] = [
            '#type' => 'textfield',
            '#title' => t('Enter Name: '),
            '#required' => TRUE,   
        ];
        $form['student_rollno'] = [
            '#type' => 'textfield',
            '#title' => t('Enter Enrollment Number:'),
            '#required' => TRUE,
        ];
        $form['student_mail'] = [
            '#type' => 'email',
            '#title' => t('Enter Email ID:'),
            '#required' => TRUE,
        ];
        $form['student_phone'] = [
            '#type' => 'tel',
            '#title' => t('Enter Contact Number'),
         ];
         $form['student_dob'] = [
            '#type' => 'date',
            '#title' => t('Enter DOB:'),
            '#required' => TRUE,
         ];
         $form['student_gender'] = [
            '#type' => 'select',
            '#title' => t('Select Gender:'),
            '#options' => [
                'Male' => t('Male'),
                'Female' => t('Female'),
                'Other' => t('Other'),
            ], 
         ];
         $form['actions']['#type'] = 'actions';
         $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this ->t('Register'),
            '#button_type' => 'primary',
         ];
         $form['reset'] = [
            '#type' => 'button',
            '#button_type' => 'reset',
            '#value' => t('RESET'),
            '#weight' => 9,
            '#validate' => [],
            '#attributes' => [
                  'onclick' => 'this.form.reset(); return false;',
            ],
            ];
            $form['#attached']['library'][] = 'custom_form/custom';
            $form['#theme'] = 'students_add_form';
            return $form;
    }
    public function validateForm(array &$form, FormStateInterface $form_state) {
        if(strlen($form_state -> getValue('student_rollno')) < 8){
            $form_state -> setErrorByName('student_rollno',$this->t('Please enter a valid Enrollment Number'));
        }
        if(strlen($form_state->getValue('student_phone'))<10){
            $form_state -> setErrorByName('student_phone',$this->t('Please enter a valid Contact Number'));
        }  
      }
      public function submitForm(array &$form, FormStateInterface $form_state) {
       \Drupal::messenger()-> addMessage(t('Student Registration Done!! Registered Values are:'));
       foreach ($form_state->getValues() as $key => $value) {
        \Drupal::messenger()-> addMessage($key .':'.$value);
       }
      }
}
