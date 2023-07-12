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

namespace W3Scout\ContaoGoogleBusinessReviews\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create('W3Scout\ContaoGoogleBusinessReviews\W3ScoutContaoGoogleBusinessReviews')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle']),
        ];
    }
}
