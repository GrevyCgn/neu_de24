<?php

namespace Drupal\Tests\node\Functional;

/**
 * Tests that the post information (submitted by Username on date) text displays
 * appropriately.
 *
 * @group node
 */
class NodePostSettingsTest extends NodeTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  protected function setUp(): void {
    parent::setUp();

    $web_user = $this->drupalCreateUser([
      'create page content',
      'administer content types',
      'access user profiles',
    ]);
    $this->drupalLogin($web_user);
  }

  /**
   * Confirms "Basic page" content type and post information is on a new node.
   */
  public function testPagePostInfo() {

    // Set "Basic page" content type to display post information.
    $edit = [];
    $edit['display_submitted'] = TRUE;
    $this->drupalGet('admin/structure/types/manage/page');
    $this->submitForm($edit, 'Save content type');

    // Create a node.
    $edit = [];
    $edit['title[0][value]'] = $this->randomMachineName(8);
    $edit['body[0][value]'] = $this->randomMachineName(16);
    $this->drupalGet('node/add/page');
    $this->submitForm($edit, 'Save');

    // Check that the post information is displayed.
    $node = $this->drupalGetNodeByTitle($edit['title[0][value]']);
<<<<<<< HEAD
    $this->assertSession()->pageTextContainsOnce('Submitted by');
=======
    $this->assertSession()->elementsCount('xpath', '//div[contains(@class, "node__submitted")]', 1);
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    $node->delete();

    // Set "Basic page" content type to display post information.
    $edit = [];
    $edit['display_submitted'] = FALSE;
    $this->drupalGet('admin/structure/types/manage/page');
    $this->submitForm($edit, 'Save content type');

    // Create a node.
    $edit = [];
    $edit['title[0][value]'] = $this->randomMachineName(8);
    $edit['body[0][value]'] = $this->randomMachineName(16);
    $this->drupalGet('node/add/page');
    $this->submitForm($edit, 'Save');

    // Check that the post information is not displayed.
<<<<<<< HEAD
    $this->assertSession()->pageTextNotContains('Submitted by');
=======
    $this->assertSession()->elementNotExists('xpath', '//div[contains(@class, "node__submitted")]');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
  }

}
