<?php

namespace Drupal\Core\TypedData\Validation;

use Drupal\Core\Validation\TranslatorInterface;
use Symfony\Component\Validator\Context\ExecutionContextFactoryInterface;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Defines an execution factory for the Typed Data validator.
 *
 * We do not use the factory provided by Symfony as it is marked internal.
 */
class ExecutionContextFactory implements ExecutionContextFactoryInterface {

  /**
   * @var \Drupal\Core\Validation\TranslatorInterface
   */
  protected $translator;

  /**
   * @var string|null
   */
  protected $translationDomain;

  /**
   * Constructs a new ExecutionContextFactory instance.
   *
   * @param \Drupal\Core\Validation\TranslatorInterface $translator
   *   The translator instance.
   * @param string $translationDomain
   *   (optional) The translation domain.
   */
  public function __construct(TranslatorInterface $translator, $translationDomain = NULL) {
    $this->translator = $translator;
    $this->translationDomain = $translationDomain;
  }

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function createContext(ValidatorInterface $validator, $root): ExecutionContextInterface {
=======
  public function createContext(ValidatorInterface $validator, $root) {
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    return new ExecutionContext(
      $validator,
      $root,
      $this->translator,
      $this->translationDomain
    );
  }

}
