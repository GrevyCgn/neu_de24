<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\Alias;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AliasConfigurator extends AbstractServiceConfigurator
{
<<<<<<< HEAD
=======
    public const FACTORY = 'alias';

>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    use Traits\DeprecateTrait;
    use Traits\PublicTrait;

    public const FACTORY = 'alias';

    public function __construct(ServicesConfigurator $parent, Alias $alias)
    {
        $this->parent = $parent;
        $this->definition = $alias;
    }
}
