<?php

namespace Drupal\layout_builder\Controller;

use Drupal\Core\Ajax\AjaxHelperTrait;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Layout\LayoutPluginManagerInterface;
use Drupal\Core\Plugin\PluginFormInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;
use Drupal\layout_builder\Context\LayoutBuilderContextTrait;
use Drupal\layout_builder\LayoutBuilderHighlightTrait;
use Drupal\layout_builder\SectionStorageInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Defines a controller to choose a new section.
 *
 * @internal
 *   Controller classes are internal.
 */
class ChooseSectionController implements ContainerInjectionInterface {

  use AjaxHelperTrait;
  use LayoutBuilderContextTrait;
  use LayoutBuilderHighlightTrait;
  use StringTranslationTrait;

  /**
   * The layout manager.
   *
   * @var \Drupal\Core\Layout\LayoutPluginManagerInterface
   */
  protected $layoutManager;

  /**
   * ChooseSectionController constructor.
   *
   * @param \Drupal\Core\Layout\LayoutPluginManagerInterface $layout_manager
   *   The layout manager.
   */
  public function __construct(LayoutPluginManagerInterface $layout_manager) {
    $this->layoutManager = $layout_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.core.layout')
    );
  }

  /**
   * Choose a layout plugin to add as a section.
   *
   * @param \Drupal\layout_builder\SectionStorageInterface $section_storage
   *   The section storage.
   * @param int $delta
   *   The delta of the section to splice.
   *
   * @return array
   *   The render array.
   */
  public function build(SectionStorageInterface $section_storage, int $delta) {
    $items = [];
<<<<<<< HEAD
    $definitions = $this->layoutManager->getFilteredDefinitions('layout_builder', $this->getPopulatedContexts($section_storage), ['section_storage' => $section_storage]);
=======
    $definitions = $this->layoutManager->getFilteredDefinitions('layout_builder', $this->getAvailableContexts($section_storage), ['section_storage' => $section_storage]);
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    foreach ($definitions as $plugin_id => $definition) {
      $layout = $this->layoutManager->createInstance($plugin_id);
      $item = [
        '#type' => 'link',
        '#title' => [
          'icon' => $definition->getIcon(60, 80, 1, 3),
          'label' => [
            '#type' => 'container',
            '#children' => $definition->getLabel(),
          ],
        ],
        '#url' => Url::fromRoute(
          $layout instanceof PluginFormInterface ? 'layout_builder.configure_section' : 'layout_builder.add_section',
          [
            'section_storage_type' => $section_storage->getStorageType(),
            'section_storage' => $section_storage->getStorageId(),
            'delta' => $delta,
            'plugin_id' => $plugin_id,
          ]
        ),
      ];
      if ($this->isAjax()) {
        $item['#attributes']['class'][] = 'use-ajax';
        $item['#attributes']['data-dialog-type'][] = 'dialog';
        $item['#attributes']['data-dialog-renderer'][] = 'off_canvas';
      }
      $items[$plugin_id] = $item;
    }
    $output['layouts'] = [
      '#theme' => 'item_list__layouts',
      '#items' => $items,
      '#attributes' => [
        'class' => [
          'layout-selection',
        ],
        'data-layout-builder-target-highlight-id' => $this->sectionAddHighlightId($delta),
      ],
    ];

    return $output;
  }

}
