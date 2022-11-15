<?php

namespace Drupal\Tests\ctools\Kernel\Plugin\Block;

<<<<<<< HEAD
use Drupal\Core\Plugin\Context\EntityContextDefinition;
=======
use Drupal\Core\Access\AccessResultForbidden;
use Drupal\Core\Plugin\Context\ContextDefinition;
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
use Drupal\ctools\Plugin\Block\EntityView;
use Drupal\KernelTests\KernelTestBase;
use Drupal\Tests\node\Traits\NodeCreationTrait;
use Drupal\Tests\user\Traits\UserCreationTrait;

/**
 * Tests the entity_view block plugin.
 *
 * @coversDefaultClass \Drupal\ctools\Plugin\Block\EntityView
 *
 * @group ctools
 */
class EntityViewTest extends KernelTestBase {

  use NodeCreationTrait;
  use UserCreationTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected static $modules = [
=======
  public static $modules = [
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    'block',
    'ctools',
    'filter',
    'node',
    'system',
    'user',
  ];

  /**
   * A page variant.
   *
   * @var \Drupal\page_manager\PageVariantInterface
   */
  protected $pageVariant;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp(): void {
=======
  protected function setUp() {
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    parent::setUp();

    $this->installConfig(['filter']);
    $this->installEntitySchema('node');
    $this->installEntitySchema('user');
    $this->installSchema('system', ['sequences']);
  }

  /**
   * Tests plugin access.
   *
   * @covers ::access
   */
  public function testAccess() {
    // Create an unpublished node.
    $node = $this->createNode(['status' => 0]);

    $configuration = [
      'view_mode' => 'default',
<<<<<<< HEAD
    ];
    $definition = [
      'context_definitions' => [
        'entity' => new EntityContextDefinition('entity:node', NULL, TRUE, FALSE, NULL, $node),
=======
      'context' => [
        'entity' => $node,
      ],
    ];
    $definition = [
      'context' => [
        'entity' => new ContextDefinition('entity:node', NULL, TRUE, FALSE, NULL, $node),
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
      ],
      'provider' => 'ctools',
    ];
    $block = EntityView::create($this->container, $configuration, 'entity_view:node', $definition);
<<<<<<< HEAD
    $block->setContextValue('entity', $node);
=======
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    $access = $block->access(\Drupal::currentUser());
    $this->assertFalse($access);

    // Add a user than can see the unpublished block.
    $account = $this->createUser([], NULL, TRUE);
    $access = $block->access($account);
    $this->assertTrue($access);
  }

}
