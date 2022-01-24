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

    $build = [
      '#attributes' => [
        'class' => [
          'vocabularies',
        ],
      ],
    ];

    foreach($vocabularies as $vocabulary) {
      $build[$vocabulary->id()] = $vocabulary->toLink($vocabulary->label());
    }

    return $build;
  }

}
