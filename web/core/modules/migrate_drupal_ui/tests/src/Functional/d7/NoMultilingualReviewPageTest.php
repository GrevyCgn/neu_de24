<?php

namespace Drupal\Tests\migrate_drupal_ui\Functional\d7;

use Drupal\Tests\migrate_drupal_ui\Functional\NoMultilingualReviewPageTestBase;

<<<<<<< HEAD
// cspell:ignore Filefield Multiupload Imagefield
=======
// cspell:ignore Multiupload Imagefield
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

/**
 * Tests Drupal 7 upgrade without translations.
 *
 * The test method is provided by the MigrateUpgradeTestBase class.
 *
 * @group migrate_drupal_ui
 */
class NoMultilingualReviewPageTest extends NoMultilingualReviewPageTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'book',
    'config_translation',
    'content_translation',
    'datetime_range',
    'file',
    'forum',
    'language',
    'migrate_drupal_ui',
    'statistics',
    'telephone',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->loadFixture($this->getModulePath('migrate_drupal') . '/tests/fixtures/drupal7.php');

    // @todo Remove this in https://www.drupal.org/node/3267515
    \Drupal::service('module_installer')->uninstall(['rdf']);
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
  protected function getAvailablePaths() {
    return [
      'Block',
      'Block languages',
      'Book',
      'Bulk Export',
      'Chaos Tools (CTools) AJAX Example',
      'Chaos tools',
      'Comment',
      'Contact',
      'Custom content panes',
      'Custom rulesets',
      'Dashboard',
      'Database logging',
      'Date',
      'Date All Day',
      'Date Context',
      'Date Migration',
      'Date Popup',
      'Date Repeat API',
      'Date Repeat Field',
      'Date Tools',
      'Date Views',
      'Email',
      'Entity Reference',
      'Entity Translation',
      'Entity feature module',
      'Entity tokens',
      'Field translation',
      'Field',
      'Field SQL storage',
      'File',
      'Filter',
      'Forum',
      'Image',
      'Internationalization',
      'Link',
      'List',
      'Locale',
      'Menu',
      'Menu translation',
      'Multiupload Filefield Widget',
      'Multiupload Imagefield Widget',
      'Node',
      'Node Reference',
      'Number',
      'OpenID',
      'Options',
      'Overlay',
      'Page manager',
      'Path',
      'Phone',
      'Poll',
      'Profile',
      'Search',
      'Search embedded form',
      'Shortcut',
      'Statistics',
      'String translation',
      'Stylizer',
      'Synchronize translations',
      'System',
      'Taxonomy translation',
      'Taxonomy',
      'Telephone',
      'Term Depth access',
      'Test search node tags',
      'Test search type',
      'Text',
      'Title',
      'User',
      'User Reference',
      'Variable translation',
      'Views UI',
      'Views content panes',
      // Include modules that do not have an upgrade path and are enabled in the
      // source database.
      'Blog',
      'Content translation',
      'Contextual links',
      'Date API',
      'Entity API',
      'Field UI',
      'Help',
      'PHP filter',
      'Testing',
      'Toolbar',
      'Trigger',
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getIncompletePaths() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  protected function getMissingPaths() {
    return [
      'Aggregator',
      'Breakpoints',
      // @todo Remove Color in https://www.drupal.org/project/drupal/issues/3270899
      'Color',
      'Contact translation',
      'Entity Translation Menu',
      'Entity Translation Upgrade',
      'FlexSlider Picture',
      'Multilingual content',
      'Multilingual forum',
      'Multilingual select',
      'Path translation',
      'Picture',
<<<<<<< HEAD
      'RDF',
=======
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
      'References',
      'References UUID',
      'Translation redirect',
      'Translation sets',
      'User mail translation',
      'Variable',
      'Variable admin',
      'Variable realm',
      'Variable store',
      'Variable views',
      'Views',
      'migrate_status_active_test',
      // These modules are in the missing path list because they are installed
      // on the source site but they are not installed on the destination site.
      'Syslog',
      'Tracker',
      'Update manager',
    ];
  }

}
