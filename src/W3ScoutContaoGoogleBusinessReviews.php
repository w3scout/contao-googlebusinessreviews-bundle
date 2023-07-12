<?php

declare(strict_types=1);

/*
 * This file is part of GoogleBusinessReviews.
 *
 * (c) Darko Selesi 2023 <hallo@w3scouts.com>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/w3scout/contao-google-business-reviews
 */

namespace W3Scout\ContaoGoogleBusinessReviews;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class W3ScoutContaoGoogleBusinessReviews extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
    }
}
