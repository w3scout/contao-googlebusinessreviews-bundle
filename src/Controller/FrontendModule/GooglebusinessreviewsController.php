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

namespace W3Scout\ContaoGoogleBusinessReviews\Controller\FrontendModule;

use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsFrontendModule;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\CoreBundle\Routing\ScopeMatcher;
use Contao\ModuleModel;
use Contao\PageModel;
use Contao\StringUtil;
use Contao\Template;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Result;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Security;
use Symfony\Contracts\Translation\TranslatorInterface;

#[AsFrontendModule(category: 'reviews', template: 'mod_googlebusinessreviews')]
class GooglebusinessreviewsController extends AbstractFrontendModuleController
{
    public const TYPE = 'googlebusinessreviews';
    protected ?PageModel $page;

    /**
     * This method extends the parent __invoke method,
     * its usage is usually not necessary.
     */
    public function __invoke(Request $request, ModuleModel $model, string $section, array $classes = null, PageModel $page = null): Response
    {
        // Get the page model
        $this->page = $page;

        $scopeMatcher = $this->container->get('contao.routing.scope_matcher');

        if ($this->page instanceof PageModel && $scopeMatcher->isFrontendRequest($request)) {
            $this->page->loadDetails();
        }

        return parent::__invoke($request, $model, $section, $classes);
    }

    /**
     * Lazyload services.
     */
    public static function getSubscribedServices(): array
    {
        $services = parent::getSubscribedServices();

        $services['contao.framework'] = ContaoFramework::class;
        $services['database_connection'] = Connection::class;
        $services['contao.routing.scope_matcher'] = ScopeMatcher::class;
        $services['translator'] = TranslatorInterface::class;

        return $services;
    }
    protected function getResponse(Template $template, ModuleModel $model, Request $request): Response
    {
        $config = new \stdClass();
        $config->api_key = $model->w3s_google_api_key;
        $config->places_id = $model->w3s_google_places_id;
        $config->language = $model->w3s_reviews_language;
        $config->translate = $model->w3s_reviews_no_translations;
        $config->sort = $model->w3s_reviews_sort;
        $config->link2gbp = $model->w3s_reviews_link2gbp;
        $config->new_review_link = $model->w3s_reviews_new_review_link;

        $reviews = $this->getGoogleReviews($config);
        $template->reviews = $reviews;

        if($config->link2gbp !== '') {
            $template->link2gbp = $config->link2gbp;
            $template->link2gbp_txt = $GLOBALS['TL_LANG']['MSC']['w3s_reviews_show_all_reviews'];
        }
        if($config->new_review_link !== '') {
            $template->new_review_link = $config->new_review_link;
            $template->new_review_link_txt = $GLOBALS['TL_LANG']['MSC']['w3s_reviews_write_new_review'];
        }

        return $template->getResponse();
    }
    protected function getGoogleReviews($config)
    {
        $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id={$config->places_id}&fields=reviews,user_ratings_total&key={$config->api_key}&language={$config->language}&reviews_sort={$config->sort}&reviews_no_translations={$config->translate}";
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        $reviews = $data['result']['reviews'];

        return $reviews;
    }
}
