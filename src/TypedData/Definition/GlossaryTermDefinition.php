<?php
/**
 * @file
 * Provides \Drupal\infusionsoft\TypedData\Definition\AddressDefinition.
 */

namespace Drupal\infusionsoft\TypedData\Definition;

use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\TypedData\ComplexDataDefinitionBase;

/**
 * Infusionsoft Address data definition
 */
class GlossaryTermDefinition extends ComplexDataDefinitionBase {
  /**
   * {@inheritdoc}
   */
  public function getPropertyDefinitions() {
    if (!isset($this->propertyDefinitions)) {
      $info = &$this->propertyDefinitions;
      $info['Term'] = DataDefinition::create('string')
        ->setLabel('Term')
        ->setRequired(TRUE);

      $info['Abbreviation'] = DataDefinition::create('string')
        ->setLabel('Abbreviation');
    }
    return $this->propertyDefinitions;
  }
}
