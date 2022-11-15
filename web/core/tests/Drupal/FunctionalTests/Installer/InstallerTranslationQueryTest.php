<?php

namespace Drupal\FunctionalTests\Installer;

/**
 * Installs Drupal in German and checks resulting site.
 *
 * @group Installer
 *
 * @see \Drupal\FunctionalTests\Installer\InstallerTranslationTest
 */
class InstallerTranslationQueryTest extends InstallerTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Overrides the language code in which to install Drupal.
   *
   * @var string
   */
  protected $langcode = 'de';

  /**
   * {@inheritdoc}
   */
  protected function visitInstaller() {
    // Place a custom local translation in the translations directory.
    mkdir($this->root . '/' . $this->siteDirectory . '/files/translations', 0777, TRUE);
    file_put_contents($this->root . '/' . $this->siteDirectory . '/files/translations/drupal-8.0.0.de.po', $this->getPo('de'));

    // The unrouted URL assembler does not exist at this point, so we build the
    // URL ourselves.
    $this->drupalGet($GLOBALS['base_url'] . '/core/install.php' . '?langcode=' . $this->langcode);

    // The language should have been automatically detected, all following
    // screens should be translated already.
    $this->assertSession()->buttonExists('Save and continue de');
    $this->translations['Save and continue'] = 'Save and continue de';

    // Check the language direction.
<<<<<<< HEAD
    $this->assertSession()->elementTextEquals('xpath', '/@dir', 'ltr');
=======
    $direction = current($this->xpath('/@dir'))->getText();
    $this->assertEquals('ltr', $direction);
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
  }

  /**
   * {@inheritdoc}
   */
  protected function setUpLanguage() {
    // The language was preset by passing a query parameter in the URL, so no
    // explicit language selection is necessary.
  }

  /**
   * Verifies the expected behaviors of the installation result.
   */
  public function testInstaller() {
    $this->assertSession()->addressEquals('user/1');
    $this->assertSession()->statusCodeEquals(200);

    // Verify German was configured but not English.
    $this->drupalGet('admin/config/regional/language');
    $this->assertSession()->pageTextContains('German');
<<<<<<< HEAD
    $this->assertSession()->pageTextNotContains('English');
=======
    $this->assertNoText('English');
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
  }

  /**
   * Returns the string for the test .po file.
   *
   * @param string $langcode
   *   The language code.
   *
   * @return string
   *   Contents for the test .po file.
   */
  protected function getPo($langcode) {
    return <<<ENDPO
msgid ""
msgstr ""

msgid "Save and continue"
msgstr "Save and continue $langcode"
ENDPO;
  }

}
