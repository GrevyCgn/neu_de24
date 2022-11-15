<?php

namespace Drupal\Tests\media\Kernel;

/**
 * Tests that media embed disables certain integrations.
 *
 * @coversDefaultClass \Drupal\media\Plugin\Filter\MediaEmbed
 * @group media
 */
class MediaEmbedFilterDisabledIntegrationsTest extends MediaEmbedFilterTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'contextual',
<<<<<<< HEAD
=======
    'quickedit',
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    // @see media_test_embed_entity_view_alter()
    'media_test_embed',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->container->get('current_user')
      ->addRole($this->drupalCreateRole([
        'access contextual links',
      ]));
  }

  /**
   * @covers ::renderMedia
   * @covers ::disableContextualLinks
   */
  public function testDisabledIntegrations() {
    $text = $this->createEmbedCode([
      'data-entity-type' => 'media',
      'data-entity-uuid' => static::EMBEDDED_ENTITY_UUID,
    ]);

    $this->applyFilter($text);
    $this->assertCount(1, $this->cssSelect('div[data-media-embed-test-view-mode]'));
    $this->assertCount(0, $this->cssSelect('div[data-media-embed-test-view-mode].contextual-region'));
  }

}
