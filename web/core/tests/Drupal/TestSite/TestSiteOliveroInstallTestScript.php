<?php

namespace Drupal\TestSite;

use Drupal\Core\Extension\ModuleInstallerInterface;
use Drupal\Core\Extension\ThemeInstallerInterface;
<<<<<<< HEAD
use Drupal\node\Entity\Node;
use Drupal\comment\Entity\Comment;
=======
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

/**
 * Setup file used by TestSiteInstallTestScript.
 *
 * @see \Drupal\Tests\Scripts\TestSiteApplicationTest
 */
class TestSiteOliveroInstallTestScript implements TestSetupInterface {

  /**
   * {@inheritdoc}
   */
  public function setup() {
    // Install required module for the Olivero front page.
    $module_installer = \Drupal::service('module_installer');
    assert($module_installer instanceof ModuleInstallerInterface);
<<<<<<< HEAD
    $module_installer->install(['olivero_test']);
=======
    $module_installer->install(['views', 'olivero_test']);
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    // Install Olivero and set it as the default theme.
    $theme_installer = \Drupal::service('theme_installer');
    assert($theme_installer instanceof ThemeInstallerInterface);
    $theme_installer->install(['olivero'], TRUE);
    $system_theme_config = \Drupal::configFactory()->getEditable('system.theme');
    $system_theme_config->set('default', 'olivero')->save();
<<<<<<< HEAD

    // Create an article that will have no comments
    $article_no_comments = Node::create(['type' => 'article']);
    $article_no_comments->set('title', 'Article without comments');
    // Enable comments
    $article_no_comments->set('comment', 2);
    $article_no_comments->save();

    // Create an article that will have comments
    $article_with_comments = Node::create(['type' => 'article']);
    $article_with_comments->set('title', 'Article with comments');
    // Enable comments
    $article_with_comments->set('comment', 2);
    $article_with_comments->save();

    $values = [
      // These values are for the entity that you're creating the comment for, not the comment itself.
      'entity_type' => 'node',
      'entity_id'   => 2,
      'field_name'  => 'comment',
      'uid' => 1,
      // These values are for the comment itself.
      'comment_type' => 'comment',
      'subject' => 'A comment',
      'comment_body' => 'Body of comment',
      // Whether the comment is 'approved' or not.
      'status' => 1,
    ];
    // Create comment entities out of our field values
    $comment1 = Comment::create($values);
    $comment1->save();

    $comment2 = Comment::create($values);
    $comment2->save();
=======
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
  }

}
