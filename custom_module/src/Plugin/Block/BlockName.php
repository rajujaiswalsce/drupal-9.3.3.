<?php
namespace Drupal\custom_module\Plugin\Block;


use Drupal\Core\Block\BlockBase;


/**
* Provides a block with a simple text.
*
* @Block(
*   id = "hello_block",
*   admin_label = @Translation("Service Block"),
*   category = @Translation("Service Block"),
* )
*/
class BlockName extends BlockBase {

 /**
  * {@inheritdoc}
  */
 public function build() {
    return [
     '#theme' => 'hello_block',
     '#data' => ['age' => '29', 'DOB' => '2 May 2000'],
   ];
 }

}