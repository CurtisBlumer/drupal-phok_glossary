<?php

/**
 * @file
 * Contains \Drupal\phok_glossary\Plugin\DataType\GlossaryTermItemList.
 */

namespace Drupal\phok_glossary\Plugin\DataType;


use Drupal\Core\TypedData\Plugin\DataType\ItemList;

/**
 * @DataType(
 *   id = "glossary_term_list",
 *   label = @Translation("Infusionsoft list"),
 *   definition_class = "\Drupal\Core\TypedData\ListDataDefinition"
 * )
 */
class GlossaryTermItemList extends ItemList { }
