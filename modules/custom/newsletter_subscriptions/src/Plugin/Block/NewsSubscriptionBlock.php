<?php

namespace Drupal\newsletter_subscriptions\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'NewsSubscriptionBlock' block.
 *
 * @Block(
 *  id = "news_subscription_block",
 *  admin_label = @Translation("News subscription block"),
 * )
 */
class NewsSubscriptionBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'news_subscription_block';
     $build['news_subscription_block']['#markup'] = 'Implement NewsSubscriptionBlock.';

    return $build;
  }

}
