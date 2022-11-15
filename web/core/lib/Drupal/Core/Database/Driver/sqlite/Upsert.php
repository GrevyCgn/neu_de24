<?php

namespace Drupal\Core\Database\Driver\sqlite;

use Drupal\sqlite\Driver\Database\sqlite\Upsert as SqliteUpsert;

@trigger_error('\Drupal\Core\Database\Driver\sqlite\Upsert is deprecated in drupal:9.4.0 and is removed from drupal:11.0.0. The SQLite database driver has been moved to the sqlite module. See https://www.drupal.org/node/3129492', E_USER_DEPRECATED);

/**
 * SQLite implementation of \Drupal\Core\Database\Query\Upsert.
 *
<<<<<<< HEAD
 * @deprecated in drupal:9.4.0 and is removed from drupal:11.0.0. The SQLite
 *   database driver has been moved to the sqlite module.
 *
 * @see https://www.drupal.org/node/3129492
 */
class Upsert extends SqliteUpsert {}
=======
 * @see https://www.sqlite.org/lang_UPSERT.html
 */
class Upsert extends QueryUpsert {

  /**
   * {@inheritdoc}
   */
  public function __toString() {
    // Create a sanitized comment string to prepend to the query.
    $comments = $this->connection->makeComment($this->comments);

    // Default fields are always placed first for consistency.
    $insert_fields = array_merge($this->defaultFields, $this->insertFields);
    $insert_fields = array_map(function ($field) {
      return $this->connection->escapeField($field);
    }, $insert_fields);

    $query = $comments . 'INSERT INTO {' . $this->table . '} (' . implode(', ', $insert_fields) . ') VALUES ';

    $values = $this->getInsertPlaceholderFragment($this->insertValues, $this->defaultFields);
    $query .= implode(', ', $values);

    // Updating the unique / primary key is not necessary.
    unset($insert_fields[$this->key]);

    $update = [];
    foreach ($insert_fields as $field) {
      // The "excluded." prefix causes the field to refer to the value for field
      // that would have been inserted had there been no conflict.
      $update[] = "$field = EXCLUDED.$field";
    }

    $query .= ' ON CONFLICT (' . $this->connection->escapeField($this->key) . ') DO UPDATE SET ' . implode(', ', $update);

    return $query;
  }

}
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
