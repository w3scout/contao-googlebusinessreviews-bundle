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

use W3Scout\ContaoGoogleBusinessReviews\Controller\FrontendModule\GooglebusinessreviewsController;

/**
 * Frontend modules
 */
$GLOBALS['TL_LANG']['FMD']['reviews'] = 'Google Business Reviews';
$GLOBALS['TL_LANG']['FMD'][GooglebusinessreviewsController::TYPE] = ['Google Business Reviews', 'Displays Google business reviews.'];
