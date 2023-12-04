<?php
namespace Drupal\custom_api\Plugin\rest\resource;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Url;
use Drupal\rest\Plugin\ResourceBase;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\Component\Serialization\Json;
/**
 * Provides a resource to get view modes by entity and bundle.
 * @RestResource(
 *   id = "customApi",
 *   label = @Translation("Custom Get Rest Resource"),
 *   uri_paths = {
 *     "canonical" = "/api/custom"
 *   }
 * )
 */

class ResourceName extends ResourceBase{
      /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {
    //  dd(\Drupal::request()->query->has('url'));
    if (\Drupal::request()->query->has('url') ) {
        
        $url = \Drupal::request()->query->get('url');

        if (!empty($url)) {
          
          $query = \Drupal::entityQuery('node')
            ->condition('field_title', $url);
          
          $nodes = $query->execute();
          
          $node_id = array_values($nodes);
  
          
          if (!empty($node_id)) {
          $data = [];
          for ($i=0; $i < count($node_id); $i++) { 
            // dd($node_id);
            array_push($data,Node::load($node_id[$i]));
          }
           
            return new ModifiedResourceResponse($data);
                }
                
            }
       }
      
   }

}