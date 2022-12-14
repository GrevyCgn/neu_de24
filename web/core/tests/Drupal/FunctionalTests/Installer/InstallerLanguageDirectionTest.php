<?php

namespace Drupal\FunctionalTests\Installer;

/**
 * Verifies that the early installer uses the correct language direction.
 *
 * @group Installer
 */
class InstallerLanguageDirectionTest extends InstallerTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Overrides the language code the installer should use.
   *
   * @var string
   */
  protected $langcode = 'ar';

  /**
   * {@inheritdoc}
   */
  protected function setUpLanguage() {
    // Place a custom local translation in the translations directory.
    mkdir($this->root . '/' . $this->siteDirectory . '/files/translations', 0777, TRUE);
    file_put_contents($this->root . '/' . $this->siteDirectory . '/files/translations/drupal-8.0.0.ar.po', "msgid \"\"\nmsgstr \"\"\nmsgid \"Save and continue\"\nmsgstr \"Save and continue Arabic\"");

    parent::setUpLanguage();
    // After selecting a different language than English, all following screens
    // should be translated already.
    $this->assertSession()->buttonExists('Save and continue Arabic');
    $this->translations['Save and continue'] = 'Save and continue Arabic';

    // Verify that language direction is right-to-left.
<<<<<<< HEAD
    $this->assertSession()->elementTextEquals('xpath', '/@dir', 'rtl');
=======
    $direction = current($this->xpath('/@dir'))->getText();
    $this->assertEquals('rtl', $direction);
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
  }

  /**
   * Confirms that the installation succeeded.
   */
  public function testInstalled() {
    $this->assertSession()->addressEquals('user/1');
    $this->assertSession()->statusCodeEquals(200);
  }

}
