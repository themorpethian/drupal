<?php

/**
 * @file
 * Contains \Drupal\entity_test\Entity\EntityTestCache.
 */

namespace Drupal\entity_test\Entity;

use Drupal\Core\Entity\Annotation\EntityType;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Language\Language;

/**
 * Defines the test entity class.
 *
 * @EntityType(
 *   id = "entity_test_cache",
 *   label = @Translation("Test entity with field cache"),
 *   controllers = {
 *     "storage" = "Drupal\entity_test\EntityTestStorageController",
 *     "access" = "Drupal\entity_test\EntityTestAccessController",
 *     "form" = {
 *       "default" = "Drupal\entity_test\EntityTestFormController"
 *     },
 *     "translation" = "Drupal\content_translation\ContentTranslationController"
 *   },
 *   base_table = "entity_test",
 *   fieldable = TRUE,
 *   field_cache = TRUE,
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "bundle" = "type"
 *   },
 *   menu_base_path = "entity-test/manage/%entity_test"
 * )
 */
class EntityTestCache extends EntityTest {

}
