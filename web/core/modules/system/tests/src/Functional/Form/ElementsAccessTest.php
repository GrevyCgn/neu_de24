<?php

namespace Drupal\Tests\system\Functional\Form;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests access control for form elements.
 *
 * @group Form
 */
class ElementsAccessTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = ['form_test'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Ensures that child values are still processed when #access = FALSE.
   */
  public function testAccessFalse() {
    $this->drupalGet('form_test/vertical-tabs-access');
    $this->submitForm([], 'Submit');
<<<<<<< HEAD
    $this->assertSession()->pageTextNotContains('This checkbox inside a vertical tab does not have its default value.');
    $this->assertSession()->pageTextNotContains('This textfield inside a vertical tab does not have its default value.');
    $this->assertSession()->pageTextNotContains('This checkbox inside a fieldset does not have its default value.');
    $this->assertSession()->pageTextNotContains('This checkbox inside a container does not have its default value.');
    $this->assertSession()->pageTextNotContains('This checkbox inside a nested container does not have its default value.');
    $this->assertSession()->pageTextNotContains('This checkbox inside a vertical tab whose fieldset access is allowed does not have its default value.');
=======
    $this->assertNoText('This checkbox inside a vertical tab does not have its default value.');
    $this->assertNoText('This textfield inside a vertical tab does not have its default value.');
    $this->assertNoText('This checkbox inside a fieldset does not have its default value.');
    $this->assertNoText('This checkbox inside a container does not have its default value.');
    $this->assertNoText('This checkbox inside a nested container does not have its default value.');
    $this->assertNoText('This checkbox inside a vertical tab whose fieldset access is allowed does not have its default value.');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    $this->assertSession()->pageTextContains('The form submitted correctly.');
  }

}
