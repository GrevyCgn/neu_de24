<?php

namespace Drupal\Tests\node\Functional;

use Drupal\Component\Utility\Html;

/**
 * Tests the node/{node} page.
 *
 * @group node
 * @see \Drupal\node\Controller\NodeController
 */
class NodeViewTest extends NodeTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests the html head links.
   */
  public function testHtmlHeadLinks() {
    $node = $this->drupalCreateNode();

    $this->drupalGet($node->toUrl());

<<<<<<< HEAD
    $element = $this->assertSession()->elementExists('css', 'link[rel="canonical"]');
    $this->assertEquals($node->toUrl()->setAbsolute()->toString(), $element->getAttribute('href'));

    $element = $this->assertSession()->elementExists('css', 'link[rel="shortlink"]');
    $this->assertEquals($node->toUrl('canonical', ['alias' => TRUE])->setAbsolute()->toString(), $element->getAttribute('href'));
=======
    $result = $this->xpath('//link[@rel = "canonical"]');
    $this->assertEquals($node->toUrl()->setAbsolute()->toString(), $result[0]->getAttribute('href'));

    // Link relations are checked for access for anonymous users.
    $result = $this->xpath('//link[@rel = "version-history"]');
    $this->assertEmpty($result, 'Version history not present for anonymous users without access.');

    $result = $this->xpath('//link[@rel = "edit-form"]');
    $this->assertEmpty($result, 'Edit form not present for anonymous users without access.');

    $this->drupalLogin($this->createUser(['access content']));
    $this->drupalGet($node->toUrl());

    $result = $this->xpath('//link[@rel = "canonical"]');
    $this->assertEquals($node->toUrl()->setAbsolute()->toString(), $result[0]->getAttribute('href'));

    // Link relations are present regardless of access for authenticated users.
    $result = $this->xpath('//link[@rel = "version-history"]');
    $this->assertEquals($node->toUrl('version-history')->setAbsolute()->toString(), $result[0]->getAttribute('href'));

    $result = $this->xpath('//link[@rel = "edit-form"]');
    $this->assertEquals($node->toUrl('edit-form')->setAbsolute()->toString(), $result[0]->getAttribute('href'));

    // Give anonymous users access to edit the node. Do this through the UI to
    // ensure caches are handled properly.
    $this->drupalLogin($this->rootUser);
    $edit = [
      'anonymous[edit own ' . $node->bundle() . ' content]' => TRUE,
    ];
    $this->drupalGet('admin/people/permissions');
    $this->submitForm($edit, 'Save permissions');
    $this->drupalLogout();

    // Anonymous user's should now see the edit-form link but not the
    // version-history link.
    $this->drupalGet($node->toUrl());
    $result = $this->xpath('//link[@rel = "canonical"]');
    $this->assertEquals($node->toUrl()->setAbsolute()->toString(), $result[0]->getAttribute('href'));

    $result = $this->xpath('//link[@rel = "version-history"]');
    $this->assertEmpty($result, 'Version history not present for anonymous users without access.');

    $result = $this->xpath('//link[@rel = "edit-form"]');
    $this->assertEquals($node->toUrl('edit-form')->setAbsolute()->toString(), $result[0]->getAttribute('href'));
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
  }

  /**
   * Tests the Link header.
   */
  public function testLinkHeader() {
    $node = $this->drupalCreateNode();

    $expected = [
      '<' . Html::escape($node->toUrl('canonical')->setAbsolute()->toString()) . '>; rel="canonical"',
      '<' . Html::escape($node->toUrl('canonical', ['alias' => TRUE])->setAbsolute()->toString()) . '>; rel="shortlink"',
    ];

    $this->drupalGet($node->toUrl());

    $links = $this->getSession()->getResponseHeaders()['Link'];
    $this->assertEquals($expected, $links);
  }

  /**
   * Tests that we store and retrieve multi-byte UTF-8 characters correctly.
   */
  public function testMultiByteUtf8() {
    $title = '🐝';
    // To ensure that the title has multi-byte characters, we compare the byte
    // length to the character length.
    $this->assertLessThan(strlen($title), mb_strlen($title, 'utf-8'));
    $node = $this->drupalCreateNode(['title' => $title]);
    $this->drupalGet($node->toUrl());
    // Verify that the passed title was returned.
<<<<<<< HEAD
    $this->assertSession()->elementTextEquals('xpath', '//h1/span', $title);
=======
    $this->assertSession()->elementTextEquals('xpath', '//span[contains(@class, "field--name-title")]', $title);
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
  }

}
