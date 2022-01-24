<?php

namespace Drupal\custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "custom_vocabularies",
 *   admin_label = @Translation("Vocabularies"),
 *   category = @Translation("custom")
 * )
 */
class Vocabularies extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $entity_type_manager = \Drupal::entityTypeManager();
    $vocabularyStorage = $entity_type_manager->getStorage('taxonomy_vocabulary');
    $vocabularies = $vocabularyStorage->loadMultiple();
    dump($vocabularies);


    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
