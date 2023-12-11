<?php
namespace Drupal\custom_module\Plugin\Block;


use Drupal\Core\Block\BlockBase;

// id: This is a unique identifier for the plugin.
// label: This is the human-readable name of the plugin.
// module: This is the name of the module that provides the plugin.
//Annotations can be used to provide metadata about a class or function.

/**
 * 
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