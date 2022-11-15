<?php

namespace Drupal\migrate_cache_counts_test\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\EmbeddedDataSource;
use Drupal\migrate\Plugin\migrate\source\SourcePluginBase;

/**
 * A copy of embedded_data which allows caching the count.
 *
 * @MigrateSource(
 *   id = "cacheable_embedded_data",
 *   source_module = "migrate"
 * )
 */
class CacheableEmbeddedDataSource extends EmbeddedDataSource {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  #[\ReturnTypeWillChange]
=======
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
  public function count($refresh = FALSE) {
    return SourcePluginBase::count($refresh);
  }

  /**
   * {@inheritdoc}
   */
  protected function doCount() {
    return parent::count(TRUE);
  }

}
