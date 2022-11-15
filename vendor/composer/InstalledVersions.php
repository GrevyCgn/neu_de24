<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * See also https://getcomposer.org/doc/07-runtime.md#installed-versions
 *
 * To require its presence, you can require `composer-runtime-api ^2.0`
 *
 * @final
 */
class InstalledVersions
{
<<<<<<< HEAD
    /**
     * @var mixed[]|null
     * @psalm-var array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string, type: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string, type?: string}>}|array{}|null
     */
    private static $installed;
=======
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-main',
    'version' => 'dev-main',
    'aliases' => 
    array (
    ),
    'reference' => '8af5c85619eb1347fb0be10206ff7e6519fadae4',
    'name' => 'drupal/recommended-project',
  ),
  'versions' => 
  array (
    'asm89/stack-cors' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b9c31def6a83f84b4d4a40d35996d375755f0e08',
    ),
    'commerceguys/addressing' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '00c263fa945e7f78524bbb6b99d331f3b493be2a',
    ),
    'composer/installers' => 
    array (
      'pretty_version' => 'v1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1a0357fccad9d1cc1ea0c9a05b8847fbccccb78d',
    ),
    'composer/semver' => 
    array (
      'pretty_version' => '3.2.5',
      'version' => '3.2.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f3ea725711245195f62e54ffa402d8ef2fdba9',
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.13.1',
      'version' => '1.13.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
    ),
    'doctrine/collections' => 
    array (
      'pretty_version' => '1.6.7',
      'version' => '1.6.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '55f8b799269a1a472457bd1a41b4f379d4cfba4a',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
    ),
    'doctrine/reflection' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa587178be682efe90d005e3a322590d6ebb59a5',
    ),
    'dompdf/dompdf' => 
    array (
      'pretty_version' => 'v0.8.6',
      'version' => '0.8.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'db91d81866c69a42dad1d2926f61515a1e3f42c5',
    ),
    'drupal/action' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/address' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.9',
    ),
    'drupal/admin_toolbar' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3.0.1',
    ),
    'drupal/aggregator' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/automated_cron' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/ban' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/bartik' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/basic_auth' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/big_pipe' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/block' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/block_content' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/book' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/breakpoint' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/ckeditor' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/claro' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/classy' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/color' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/comment' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/config' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/config_translation' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/contact' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/content_moderation' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/content_translation' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/contextual' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core' => 
    array (
      'pretty_version' => '9.2.1',
      'version' => '9.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '20eb99aa59a265d22a21a4d6fde70901c3b5a37c',
    ),
    'drupal/core-annotation' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-assertion' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-bridge' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-class-finder' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-composer-scaffold' => 
    array (
      'pretty_version' => '9.2.1',
      'version' => '9.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7b125516d6568b888945ee03ac2636dcced76e8d',
    ),
    'drupal/core-datetime' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-dependency-injection' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-diff' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-discovery' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-event-dispatcher' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-file-cache' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-file-security' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-filesystem' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-front-matter' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-gettext' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-graph' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-http-foundation' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-php-storage' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-plugin' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-project-message' => 
    array (
      'pretty_version' => '9.2.1',
      'version' => '9.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '812d6da43dd49cc210af62e80fa92189e68e565a',
    ),
    'drupal/core-proxy-builder' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-recommended' => 
    array (
      'pretty_version' => '9.2.1',
      'version' => '9.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f043a94e9a8aa60016974d60648508258a51bf86',
    ),
    'drupal/core-render' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-serialization' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-transliteration' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-utility' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-uuid' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/core-version' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/ctools' => 
    array (
      'pretty_version' => '3.7.0',
      'version' => '3.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.7',
    ),
    'drupal/datetime' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/datetime_range' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/dblog' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/dynamic_page_cache' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/editor' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/entity_print' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-2.2',
    ),
    'drupal/entity_reference' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/entity_reference_revisions' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.9',
    ),
    'drupal/field' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/field_group' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.1',
    ),
    'drupal/field_layout' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/field_ui' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/file' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/filter' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/forum' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/hal' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/help' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/help_topics' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/history' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/image' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/inline_form_errors' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/jsonapi' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/language' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/layout_builder' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/layout_discovery' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/link' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/locale' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/media' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/media_library' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/menu_link_content' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/menu_ui' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/migrate' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/migrate_drupal' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/migrate_drupal_multilingual' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/migrate_drupal_ui' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/minimal' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/module_filter' => 
    array (
      'pretty_version' => '3.2.0',
      'version' => '3.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-3.2',
    ),
    'drupal/node' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/olivero' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/options' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/page_cache' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/paragraphs' => 
    array (
      'pretty_version' => '1.12.0',
      'version' => '1.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.12',
    ),
    'drupal/path' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/path_alias' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/pathauto' => 
    array (
      'pretty_version' => '1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.8',
    ),
    'drupal/quickedit' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/rdf' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/recommended-project' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
      ),
      'reference' => '8af5c85619eb1347fb0be10206ff7e6519fadae4',
    ),
    'drupal/responsive_image' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/rest' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/search' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/serialization' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/settings_tray' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/seven' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/shortcut' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/standard' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/stark' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/statistics' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/syslog' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/system' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/taxonomy' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/telephone' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/text' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/token' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.9',
    ),
    'drupal/toolbar' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/tour' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/tracker' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/update' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/user' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/views' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/views_ui' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/workflows' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'drupal/workspaces' => 
    array (
      'replaced' => 
      array (
        0 => '9.2.1',
      ),
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.25',
      'version' => '2.1.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '0dbf5d78455d4d6a41d186da50adc1122ec066f4',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '6.5.5',
      'version' => '6.5.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e7d04f1f6450fef59366c399cfad4b9383aa30d',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.8.2',
      'version' => '1.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc960a912984efb74d0a90222870c72c87f10c91',
    ),
    'laminas/laminas-diactoros' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7d2034110ae18afe05050b796a3ee4b3fe177876',
    ),
    'laminas/laminas-escaper' => 
    array (
      'pretty_version' => '2.7.0',
      'version' => '2.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e04bc5ae5990b17159d79d331055e2c645e5cc5',
    ),
    'laminas/laminas-feed' => 
    array (
      'pretty_version' => '2.14.1',
      'version' => '2.14.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '463fdae515fba30633906098c258d3b2c733c15c',
    ),
    'laminas/laminas-stdlib' => 
    array (
      'pretty_version' => '3.3.1',
      'version' => '3.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd81c7ffe602ed0e6ecb18691019111c0f4bf1efe',
    ),
    'laminas/laminas-zendframework-bridge' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6cccbddfcfc742eb02158d6137ca5687d92cee32',
    ),
    'masterminds/html5' => 
    array (
      'pretty_version' => '2.7.4',
      'version' => '2.7.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '9227822783c75406cfe400984b2f095cdf03d417',
    ),
    'pear/archive_tar' => 
    array (
      'pretty_version' => '1.4.13',
      'version' => '1.4.13.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b87b41178cc6d4ad3cba678a46a1cae49786011',
    ),
    'pear/console_getopt' => 
    array (
      'pretty_version' => 'v1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a41f8d3e668987609178c7c4a9fe48fecac53fa0',
    ),
    'pear/pear-core-minimal' => 
    array (
      'pretty_version' => 'v1.10.10',
      'version' => '1.10.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '625a3c429d9b2c1546438679074cac1b089116a7',
    ),
    'pear/pear_exception' => 
    array (
      'pretty_version' => 'v1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b14fbe2ddb0b9f94f5b24cf08783d599f776fff0',
    ),
    'phenx/php-font-lib' => 
    array (
      'pretty_version' => '0.5.2',
      'version' => '0.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ca6ad461f032145fff5971b5985e5af9e7fa88d8',
    ),
    'phenx/php-svg-lib' => 
    array (
      'pretty_version' => 'v0.3.3',
      'version' => '0.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'roundcube/plugin-installer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'rsky/pear-core-min' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.10.10',
      ),
    ),
    'sabberworm/php-css-parser' => 
    array (
      'pretty_version' => '8.3.1',
      'version' => '8.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd217848e1396ef962fb1997cf3e2421acba7f796',
    ),
    'shama/baton' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'stack/builder' => 
    array (
      'pretty_version' => 'v1.0.6',
      'version' => '1.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4faaa6f532c6086bc66c29e1bc6c29593e1ca7c',
    ),
    'symfony-cmf/routing' => 
    array (
      'pretty_version' => '2.3.3',
      'version' => '2.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c97e7b7709b313cecfb76d691ad4cc22acbf3f5',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a62acecdf5b50e314a4f305cd01b5282126f3095',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8d2d5c94438548bff9f998ca874e202bb29d07f',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '2ed2a0a6c960bf4e2e862ec77b2f2c558b83c64d',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f38c8804a9e97d23e0c8d63341088cd8a22d627',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '310a756cec00d29d89a08518405aded046a54a8b',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '047773e7016e4fd45102cedf4bd2558ae0d0c32f',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v1.1.9',
      'version' => '1.1.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '84e23fdcd2517bf37aecbd16967e83f0caee25a7',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1',
      ),
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '0c79d5a65ace4fe66e49702658c024a419d2438b',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '3795165596fe81a52296b78c9aae938d434069cc',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ed710d297b181f6a7194d8172c9c2423d58e4852',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '46cd95797e9df938fdd2b03693b5fca5e64b01ce',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '63b5bb7db83e5673936d6e3b8b3e022ff6474933',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '65bd267525e82759e7d8c4e8ceea44f398838e65',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a142215a36a3888e30d0a9eeea9766764e96976',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fba8933c384d6476ab14fb7b8526e5287ca7e010',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eca0bf41ed421bed1b57c4958bab16aa86b757d0',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd61e6dd273975c6625316de9d141ebd197f93c9',
    ),
    'symfony/psr-http-message-bridge' => 
    array (
      'pretty_version' => 'v2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '81db2d4ae86e9f0049828d9343a72b9523884e5d',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '3a3c2f197ad0846ac6413225fc78868ba1c61434',
    ),
    'symfony/serializer' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '6db3eb4f1bb437cd3730f52353ba4b568acaddf5',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dfe132c5c6d89f90ce7f961742cc532e9ca16dd4',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '95c812666f3e91db75385749fe219c5e494c7f95',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/validator' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '29c14955e8b2e7351aaa11553cb36d4a689b7b11',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d3953e627fe4b5f6df503f356b6545ada6351f3',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v4.4.25',
      'version' => '4.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '81cdac5536925c1c4b7b50aabc9ff6330b9eb5fc',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v2.14.6',
      'version' => '2.14.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '27e5cf2b05e3744accf39d4c68a3235d9966d260',
    ),
    'typo3/phar-stream-wrapper' => 
    array (
      'pretty_version' => 'v3.1.6',
      'version' => '3.1.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '60131cb573a1e478cfecd34e4ea38e3b31505f75',
    ),
    'zendframework/zend-diactoros' => 
    array (
      'replaced' => 
      array (
        0 => '^2.2.1',
      ),
    ),
    'zendframework/zend-escaper' => 
    array (
      'replaced' => 
      array (
        0 => '^2.6.1',
      ),
    ),
    'zendframework/zend-feed' => 
    array (
      'replaced' => 
      array (
        0 => '^2.12.0',
      ),
    ),
    'zendframework/zend-stdlib' => 
    array (
      'replaced' => 
      array (
        0 => '^3.2.1',
      ),
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

    /**
     * @var bool|null
     */
    private static $canGetVendors;

    /**
     * @var array[]
     * @psalm-var array<string, array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string, type: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string, type?: string}>}>
     */
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }

        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Returns a list of all package names with a specific type e.g. 'library'
     *
     * @param  string   $type
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackagesByType($type)
    {
        $packagesByType = array();

        foreach (self::getInstalled() as $installed) {
            foreach ($installed['versions'] as $name => $package) {
                if (isset($package['type']) && $package['type'] === $type) {
                    $packagesByType[] = $name;
                }
            }
        }

        return $packagesByType;
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @param  bool   $includeDevRequirements
     * @return bool
     */
    public static function isInstalled($packageName, $includeDevRequirements = true)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return $includeDevRequirements || empty($installed['versions'][$packageName]['dev_requirement']);
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param  VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param  string        $packageName
     * @param  string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as install path. Packages of type metapackages also have a null install path.
     */
    public static function getInstallPath($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            return isset($installed['versions'][$packageName]['install_path']) ? $installed['versions'][$packageName]['install_path'] : null;
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string, type: string}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @deprecated Use getAllRawData() instead which returns all datasets for all autoloaders present in the process. getRawData only returns the first dataset loaded, which may not be what you expect.
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string, type: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string, type?: string}>}
     */
    public static function getRawData()
    {
        @trigger_error('getRawData only returns the first dataset loaded, which may not be what you expect. Use getAllRawData() instead which returns all datasets for all autoloaders present in the process.', E_USER_DEPRECATED);

        if (null === self::$installed) {
            // only require the installed.php file if this file is loaded from its dumped location,
            // and not from its source location in the composer/composer package, see https://github.com/composer/composer/issues/9937
            if (substr(__DIR__, -8, 1) !== 'C') {
                self::$installed = include __DIR__ . '/installed.php';
            } else {
                self::$installed = array();
            }
        }

        return self::$installed;
    }

    /**
     * Returns the raw data of all installed.php which are currently loaded for custom implementations
     *
     * @return array[]
     * @psalm-return list<array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string, type: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string, type?: string}>}>
     */
    public static function getAllRawData()
    {
        return self::getInstalled();
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string, type: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string, type?: string}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     * @psalm-return list<array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string, type: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string, type?: string}>}>
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                    if (null === self::$installed && strtr($vendorDir.'/composer', '\\', '/') === strtr(__DIR__, '\\', '/')) {
                        self::$installed = $installed[count($installed) - 1];
                    }
                }
            }
        }

        if (null === self::$installed) {
            // only require the installed.php file if this file is loaded from its dumped location,
            // and not from its source location in the composer/composer package, see https://github.com/composer/composer/issues/9937
            if (substr(__DIR__, -8, 1) !== 'C') {
                self::$installed = require __DIR__ . '/installed.php';
            } else {
                self::$installed = array();
            }
        }
        $installed[] = self::$installed;

        return $installed;
    }
}
