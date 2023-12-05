<?php

namespace Drupal\custom_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Component\Serialization\Json;
use Symfony\Component\HttpFoundation\Response;
/**
 * An custom_module controller.
 */
class DemoApi extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function homepage() {
      $client = \Drupal::httpClient();
      $request = $client->get("https://fakestoreapi.com/products/category/jewelery");
      $response = $request->getBody()->getContents();
      $result = json::decode($response);
      echo "<pre>";
      print_r($result);
    //   foreach ($result as $key => $value) {
    //    $data[] = $value;
    //   }
    // //   $data = $result[0]['image'];
    //   print_r($data);
      exit; 
      return [
        '#theme' => 'demotemplates', // The name of your Twig template file.
        '#data' => $data, // Pass the data to the template.
      ];
  }

}