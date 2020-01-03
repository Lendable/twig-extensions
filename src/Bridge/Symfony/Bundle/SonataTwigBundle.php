<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Twig\Bridge\Symfony\Bundle;

use Sonata\Twig\Bridge\Symfony\DependencyInjection\Compiler\StatusRendererCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * NEXT_MAJOR: remove this class.
 *
 * @deprecated since version 1.x, to be removed in 2.0. Use Sonata\Twig\Bridge\Symfony\SonataTwigBundle instead.
 *
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
final class SonataTwigBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new StatusRendererCompilerPass());
    }
}