<?php

namespace Drupal\Tests\block\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\block\Entity\Block;

/**
 * Tests that an active block assigned to a non-existing region triggers the
 * warning message and is disabled.
 *
 * @group block
 */
class BlockInvalidRegionTest extends BrowserTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
  protected static $modules = ['block', 'block_test'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  protected function setUp(): void {
    parent::setUp();
    // Create an admin user.
    $admin_user = $this->drupalCreateUser([
      'administer site configuration',
      'access administration pages',
      'administer blocks',
    ]);
    $this->drupalLogin($admin_user);
  }

  /**
   * Tests that blocks assigned to invalid regions work correctly.
   */
  public function testBlockInInvalidRegion() {
    // Enable a test block and place it in an invalid region.
    $block = $this->drupalPlaceBlock('test_html');
    \Drupal::configFactory()->getEditable('block.block.' . $block->id())->set('region', 'invalid_region')->save();
    $block = Block::load($block->id());

    $warning_message = 'The block ' . $block->id() . ' was assigned to the invalid region invalid_region and has been disabled.';

    // Clearing the cache should disable the test block placed in the invalid region.
    $this->drupalGet('admin/config/development/performance');
    $this->submitForm([], 'Clear all caches');
<<<<<<< HEAD
    $this->assertSession()->statusMessageContains($warning_message, 'warning');
=======
    $this->assertRaw($warning_message);
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    // Clear the cache to check if the warning message is not triggered.
    $this->drupalGet('admin/config/development/performance');
    $this->submitForm([], 'Clear all caches');
<<<<<<< HEAD
    $this->assertSession()->statusMessageNotContains($warning_message, 'warning');
=======
    $this->assertNoRaw($warning_message);
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    // Place disabled test block in the invalid region of the default theme.
    \Drupal::configFactory()->getEditable('block.block.' . $block->id())->set('region', 'invalid_region')->save();
    $block = Block::load($block->id());

    // Clear the cache to check if the warning message is not triggered.
    $this->drupalGet('admin/config/development/performance');
    $this->submitForm([], 'Clear all caches');
<<<<<<< HEAD
    $this->assertSession()->statusMessageNotContains($warning_message, 'warning');
=======
    $this->assertNoRaw($warning_message);
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
  }

}
