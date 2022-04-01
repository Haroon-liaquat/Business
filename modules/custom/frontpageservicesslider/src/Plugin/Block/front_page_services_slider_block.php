<?php

namespace Drupal\frontpageservicesslider\Plugin\Block;

use Drupal\Core\Block\BlockBase;
//use Drupal\Code\Database\Database;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "frontpageservicesslider_block",
 *   admin_label = @Translation("front page services slider block"),
 *   category = @Translation("front page services slider block"),
 * )
 */
class front_page_services_slider_block extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#attached']['library'][] = 'frontpageservicesslider/frontpageservicesslider_css';
  

  $query = \Drupal::entityQuery('node')
      ->condition("type", "product");
    $nids = $query->execute();

    $path = file_create_url(drupal_get_path('module', 'frontpageservicesslider') . '/images');

    

    $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);
    

    //print_r($someArray);

    

    foreach ($nodes as $node) {
      $api = $node->field_product_api_nids->getValue();
      $apiIDs = array_map(function($e){
        return $e['value'];
      }, $api);
      $apiNodes = \Drupal\node\Entity\Node::loadMultiple($apiIDs);
      $counter = count($apiNodes);
     $counter = ceil($counter /4) ;

     $x = 1;
     while ($x < $counter+1) {
     $someArray[$x] = $x;
     $x++;
     }

      $apiData = [];
      foreach($apiNodes as $apiNode)
      {
        $img = $apiNode->apic_image->entity ? $apiNode->apic_image->entity->url() : $path."/reading.png";
        $apiData[] = [
          'id' => $apiNode->id(),
          'title' => $apiNode->title->value,
          'body' => $apiNode->body->value,
          'img' => $img
        ];

      }

      $content[] = [
        'id' => $node->id(),
        'title' => $node->title->value,
        'apiData' => $apiData
      ];
    }

    $build['content'] = [
      '#theme' => 'front_page_services_slider',
      '#data' => [
          'content' => $content,
          'sliderPAges' => $someArray
      ],
  ];

    return $build;

  }

}