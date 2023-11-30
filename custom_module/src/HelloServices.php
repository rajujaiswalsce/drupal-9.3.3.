<?php

/**
* @file providing the service that say hello world and hello 'given name'.
*
*/

namespace  Drupal\custom_module;

class HelloServices {

 protected $usename;

 public function __construct() {
   $this->usename = 'Hello World!';
 }

 public function  serviceMyName($name = ''){
   if (empty($name)) {
     return $this->usename;
   }
   else {
     return "Hello " . $name . "!";
   }
 }

}

