<?php

namespace Drupal\timestamp_converter\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements the TimestampConverterForm form controller.
 *
 * @see \Drupal\Core\Form\FormBase
 */
class TimestampConverterForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'timestamp_converter_timestamp_converter_timestamp_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['timestamp'] = [
      '#type' => 'textfield',
      '#title' => t('Enter Timestamp'),
      '#placeholder' => t('Enter timestamp'),
      '#required' => TRUE,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => t('Convert'),
    ];
    $originalDate = null;
    $convertedTime = null;
    if($form_state->hasValue('timestamp')) {
      $input_timestamp = $form_state->getValue('timestamp');
      if (is_numeric($input_timestamp)) {
        $originalDateTime = new \DateTime("@$input_timestamp", new \DateTimeZone("UTC"));
        $originalDateTime->setTimezone(new \DateTimeZone("America/New_York"));
        $originalDate = $originalDateTime->format('n-d-Y H:i:s A');

        $modifiedDateTime = new \DateTime("@$input_timestamp", new \DateTimeZone("UTC"));
        $modifiedDateTime->setTimezone(new \DateTimeZone("America/New_York"));
        $modifiedDateTime->modify('+12 hours');
        $convertedTime = $modifiedDateTime->format('n-d-Y H:i:s ');
      }
    }
    $form['convertedTime'] = [
      '#type' => 'textfield',
      '#title' => t('Current timestamp date'),
      '#readonly' => TRUE,
      // '#default_value' => $originalDate ? $originalDate : '',
      '#value' => $originalDate, 
    ];

    $form['convertedTimestamp'] = [
      '#type' => 'textfield',
      '#title' => t('Converted Timestamp'),
      '#readonly' => TRUE,
      // '#default_value' => $convertedTime ? $convertedTime : '',
      '#value' => $convertedTime,

    ];
    // $form_state->setRebuild(true);

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Your form validation logic goes here.
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
   
  $form_state->setRebuild(true);

}
}