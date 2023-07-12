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
 * Frontend module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes'][GooglebusinessreviewsController::TYPE] = '{title_legend},name,headline,type;{config_legend},w3s_google_api_key,w3s_google_places_id,w3s_reviews_language,w3s_reviews_no_translations,w3s_reviews_sort,w3s_reviews_link2gbp,w3s_reviews_new_review_link;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';

$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_google_api_key'] = array
(
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50', 'mandatory'=>true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_google_places_id'] = array
(
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50', 'mandatory'=>true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_reviews_language'] = array
(
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50', 'mandatory'=>false),
    'sql'                     => "varchar(4) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_reviews_no_translations'] = array
(
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('true', 'false'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(5) COLLATE ascii_bin NOT NULL default 'false'"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_reviews_sort'] = array
(
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('most_relevant', 'newest'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(13) COLLATE ascii_bin NOT NULL default 'most_relevant'"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_reviews_link2gbp'] = array
(
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr w50', 'mandatory'=>false),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_reviews_new_review_link'] = array
(
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50', 'mandatory'=>false),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
