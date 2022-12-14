<?php

namespace Drupal\Tests\aggregator\Functional;

/**
 * Tests the display of a feed on the Aggregator list page.
 *
 * @group aggregator
 * @group legacy
 */
class FeedAdminDisplayTest extends AggregatorTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests the "Next update" and "Last update" fields.
   */
  public function testFeedUpdateFields() {
    // Create scheduled feed.
    $scheduled_feed = $this->createFeed(NULL, ['refresh' => '900']);

    $this->drupalGet('admin/config/services/aggregator');
    $this->assertSession()->statusCodeEquals(200);

    // The scheduled feed shows that it has not been updated yet and is
    // scheduled.
    $this->assertSession()->pageTextContains('never');
    $this->assertSession()->pageTextContains('imminently');
<<<<<<< HEAD
    $this->assertSession()->pageTextNotContains('ago');
    $this->assertSession()->pageTextNotContains('left');
=======
    $this->assertNoText('ago');
    $this->assertNoText('left');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    $this->updateFeedItems($scheduled_feed);
    $this->drupalGet('admin/config/services/aggregator');

    // After the update, an interval should be displayed on both last updated
    // and next update.
<<<<<<< HEAD
    $this->assertSession()->pageTextNotContains('never');
    $this->assertSession()->pageTextNotContains('imminently');
=======
    $this->assertNoText('never');
    $this->assertNoText('imminently');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    $this->assertSession()->pageTextContains('ago');
    $this->assertSession()->pageTextContains('left');

    // Delete scheduled feed.
    $this->deleteFeed($scheduled_feed);

    // Create non-scheduled feed.
    $non_scheduled_feed = $this->createFeed(NULL, ['refresh' => '0']);

    $this->drupalGet('admin/config/services/aggregator');
    // The non scheduled feed shows that it has not been updated yet.
    $this->assertSession()->pageTextContains('never');
<<<<<<< HEAD
    $this->assertSession()->pageTextNotContains('imminently');
    $this->assertSession()->pageTextNotContains('ago');
    $this->assertSession()->pageTextNotContains('left');
=======
    $this->assertNoText('imminently');
    $this->assertNoText('ago');
    $this->assertNoText('left');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    $this->updateFeedItems($non_scheduled_feed);
    $this->drupalGet('admin/config/services/aggregator');

    // After the feed update, we still need to see "never" as next update label.
    // Last update will show an interval.
    $this->assertSession()->pageTextContains('never');
<<<<<<< HEAD
    $this->assertSession()->pageTextNotContains('imminently');
    $this->assertSession()->pageTextContains('ago');
    $this->assertSession()->pageTextNotContains('left');
=======
    $this->assertNoText('imminently');
    $this->assertSession()->pageTextContains('ago');
    $this->assertNoText('left');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
  }

  /**
   * {@inheritdoc}
   */
  public function randomMachineName($length = 8) {
    $value = parent::randomMachineName($length);
    // See expected values in testFeedUpdateFields().
    $value = str_replace(['never', 'imminently', 'ago', 'left'], 'x', $value);
    return $value;
  }

}
