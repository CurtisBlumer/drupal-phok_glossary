<?php

/**
 * @file
 * Provides \Drupal\infusionsoft\Plugin\DataType\GlossaryTerm.
 */

namespace Drupal\phok_glossary\Plugin\DataType;

use Drupal\Core\TypedData\Plugin\DataType\String;

/**
 * Infusionsoft address type
 *
 * @DataType(
 *   id = "glossary_term",
 *   label = @Translation("Glossary term"),
 *   definition_class = "\Drupal\infusionsoft\TypedData\Definition\GlossaryTermDefinition",
 *   list_class = "\Drupal\infusionsoft\Plugin\DataType\GlossaryTermItemList"
 * )
 */
class GlossaryTerm extends Map { }
