<?php

namespace Drupal\Tests\Core\Http;

use Drupal\Core\Http\InputBag;
use Drupal\Tests\UnitTestCase;
<<<<<<< HEAD
use Symfony\Component\HttpFoundation\Request;
=======
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b

/**
 * @coversDefaultClass \Drupal\Core\Http\InputBag
 *
 * @group Http
 */
class InputBagTest extends UnitTestCase {

  /**
   * @covers ::all
   */
  public function testAll() {
    $input = [
      'bad' => 'bad',
      'good' => ['good'],
    ];
    $input_bag = new InputBag();
    $input_bag->replace($input);
    $this->assertSame($input_bag->all(), $input);
    $this->assertSame($input_bag->all('good'), ['good']);
    $this->expectException(\UnexpectedValueException::class);
    $input_bag->all('bad');
  }

<<<<<<< HEAD
  /**
   * @coversNothing
   * @todo Remove this when Symfony 4 is no longer supported.
   */
  public function testRequestFactory() {
    $request = Request::create('');
    $this->assertInstanceOf(InputBag::class, $request->query);
  }

=======
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
}
