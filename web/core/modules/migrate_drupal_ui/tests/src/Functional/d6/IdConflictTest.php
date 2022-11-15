<?php

namespace Drupal\Tests\migrate_drupal_ui\Functional\d6;

use Drupal\Tests\migrate_drupal_ui\Functional\MigrateUpgradeExecuteTestBase;

/**
 * Tests Drupal 6 Id Conflict page.
 *
 * @group migrate_drupal_ui
 */
class IdConflictTest extends MigrateUpgradeExecuteTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
<<<<<<< HEAD
=======
    'aggregator',
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    'book',
    'config_translation',
    'content_translation',
    'forum',
    'language',
    'migrate_drupal_ui',
    'statistics',
    'telephone',
<<<<<<< HEAD
=======
    // Required for translation migrations.
    'migrate_drupal_multilingual',
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->loadFixture($this->getModulePath('migrate_drupal') . '/tests/fixtures/drupal6.php');
  }

  /**
   * {@inheritdoc}
   */
  protected function getSourceBasePath() {
    return __DIR__ . '/files';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEntityCounts() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  protected function getEntityCountsIncremental() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  protected function getAvailablePaths() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  protected function getMissingPaths() {
    return [];
  }

  /**
   * Tests ID Conflict form.
   */
  public function testIdConflictForm() {
    // Start the upgrade process.
    $this->submitCredentialForm();

    $entity_types = [
      'block_content',
      'menu_link_content',
      'file',
      'taxonomy_term',
      'user',
      'comment',
      'node',
    ];
    $this->assertIdConflictForm($entity_types);
  }

}
