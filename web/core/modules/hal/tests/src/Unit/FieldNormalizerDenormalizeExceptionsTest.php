<?php

namespace Drupal\Tests\hal\Unit;

use Drupal\hal\Normalizer\FieldItemNormalizer;
use Drupal\hal\Normalizer\FieldNormalizer;
use Drupal\Tests\UnitTestCase;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;

/**
 * Tests the exceptions thrown by FieldNormalizer and FieldItemNormalizer.
 *
 * @group hal
<<<<<<< HEAD
 * @group legacy
=======
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
 */
class FieldNormalizerDenormalizeExceptionsTest extends UnitTestCase {

  /**
   * Tests that the FieldNormalizer::denormalize() throws proper exceptions.
   *
   * @covers \Drupal\hal\Normalizer\FieldNormalizer
   *
   * @dataProvider providerNormalizerDenormalizeExceptions
   */
  public function testFieldNormalizerDenormalizeExceptions($context) {
    $field_item_normalizer = new FieldNormalizer();
    $data = [];
    $class = [];
    $this->expectException(InvalidArgumentException::class);
    $field_item_normalizer->denormalize($data, $class, NULL, $context);
  }

  /**
   * Tests that the FieldItemNormalizer::denormalize() throws proper exceptions.
   *
   * @covers \Drupal\hal\Normalizer\FieldItemNormalizer
   *
   * @dataProvider providerNormalizerDenormalizeExceptions
   */
  public function testFieldItemNormalizerDenormalizeExceptions($context) {
    $field_item_normalizer = new FieldItemNormalizer();
    $data = [];
    $class = [];
    $this->expectException(InvalidArgumentException::class);
    $field_item_normalizer->denormalize($data, $class, NULL, $context);
  }

  /**
   * Provides data for field normalization tests.
   *
   * @return array
   *   The context of the normalizer.
   */
  public function providerNormalizerDenormalizeExceptions() {
    $mock = $this->getMockBuilder('\Drupal\Core\Field\Plugin\DataType\FieldItem')
<<<<<<< HEAD
      ->addMethods(['getParent'])
=======
      ->setMethods(['getParent'])
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
      ->getMock();
    $mock->expects($this->any())
      ->method('getParent')
      ->will($this->returnValue(NULL));
    return [
      [[]],
      [['target_instance' => $mock]],
    ];
  }

}
