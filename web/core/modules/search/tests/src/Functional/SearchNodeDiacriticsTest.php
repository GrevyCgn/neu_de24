<?php

namespace Drupal\Tests\search\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests search functionality with diacritics.
 *
 * @group search
 */
class SearchNodeDiacriticsTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['node', 'search'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user with permission to use advanced search.
   *
   * @var \Drupal\user\UserInterface
   */
  public $testUser;

  protected function setUp(): void {
    parent::setUp();

    $this->drupalCreateContentType(['type' => 'page', 'name' => 'Basic page']);

    node_access_rebuild();

    // Create a test user and log in.
    $this->testUser = $this->drupalCreateUser([
      'access content',
      'search content',
      'use advanced search',
      'access user profiles',
    ]);
    $this->drupalLogin($this->testUser);
  }

  /**
   * Tests that search returns results with diacritics in the search phrase.
   */
  public function testPhraseSearchPunctuation() {
    // cSpell:disable
    $body_text = 'The Enricþment Center is cómmīŦŧęđ to the well BɆĬŇĜ of æll påŔťıçȉpǎǹţș. ';
    $body_text .= 'Also meklēt (see #731298)';
    $this->drupalCreateNode(['body' => [['value' => $body_text]]]);

    // Update the search index.
    $this->container->get('plugin.manager.search')->createInstance('node_search')->updateIndex();

    // Refresh variables after the treatment.
    $this->refreshVariables();

    $edit = ['keys' => 'meklet'];
    $this->drupalGet('search/node');
    $this->submitForm($edit, 'Search');
<<<<<<< HEAD
    $this->assertSession()->responseContains('<strong>meklēt</strong>');
=======
    $this->assertRaw('<strong>meklēt</strong>');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    $edit = ['keys' => 'meklēt'];
    $this->drupalGet('search/node');
    $this->submitForm($edit, 'Search');
<<<<<<< HEAD
    $this->assertSession()->responseContains('<strong>meklēt</strong>');
=======
    $this->assertRaw('<strong>meklēt</strong>');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    $edit = ['keys' => 'cómmīŦŧęđ BɆĬŇĜ påŔťıçȉpǎǹţș'];
    $this->drupalGet('search/node');
    $this->submitForm($edit, 'Search');
<<<<<<< HEAD
    $this->assertSession()->responseContains('<strong>cómmīŦŧęđ</strong>');
    $this->assertSession()->responseContains('<strong>BɆĬŇĜ</strong>');
    $this->assertSession()->responseContains('<strong>påŔťıçȉpǎǹţș</strong>');
=======
    $this->assertRaw('<strong>cómmīŦŧęđ</strong>');
    $this->assertRaw('<strong>BɆĬŇĜ</strong>');
    $this->assertRaw('<strong>påŔťıçȉpǎǹţș</strong>');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    $edit = ['keys' => 'committed being participants'];
    $this->drupalGet('search/node');
    $this->submitForm($edit, 'Search');
<<<<<<< HEAD
    $this->assertSession()->responseContains('<strong>cómmīŦŧęđ</strong>');
    $this->assertSession()->responseContains('<strong>BɆĬŇĜ</strong>');
    $this->assertSession()->responseContains('<strong>påŔťıçȉpǎǹţș</strong>');
=======
    $this->assertRaw('<strong>cómmīŦŧęđ</strong>');
    $this->assertRaw('<strong>BɆĬŇĜ</strong>');
    $this->assertRaw('<strong>påŔťıçȉpǎǹţș</strong>');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    $edit = ['keys' => 'Enricþment'];
    $this->drupalGet('search/node');
    $this->submitForm($edit, 'Search');
<<<<<<< HEAD
    $this->assertSession()->responseContains('<strong>Enricþment</strong>');
=======
    $this->assertRaw('<strong>Enricþment</strong>');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    $edit = ['keys' => 'Enritchment'];
    $this->drupalGet('search/node');
    $this->submitForm($edit, 'Search');
<<<<<<< HEAD
    $this->assertSession()->responseNotContains('<strong>Enricþment</strong>');
=======
    $this->assertNoRaw('<strong>Enricþment</strong>');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    $edit = ['keys' => 'æll'];
    $this->drupalGet('search/node');
    $this->submitForm($edit, 'Search');
<<<<<<< HEAD
    $this->assertSession()->responseContains('<strong>æll</strong>');
=======
    $this->assertRaw('<strong>æll</strong>');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    $edit = ['keys' => 'all'];
    $this->drupalGet('search/node');
    $this->submitForm($edit, 'Search');
<<<<<<< HEAD
    $this->assertSession()->responseNotContains('<strong>æll</strong>');
=======
    $this->assertNoRaw('<strong>æll</strong>');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    // cSpell:enable
  }

}
