<?php

namespace App\Http\Controllers\Web;

use App\Models\Entities\Page;
use Exception;
use Illuminate\Http\Response;

class HomeController extends WebController
{
    /**
     * Show the application home page
     *
     * @return Response
     * @throws Exception
     */
    public function index()
    {
        // Get page
        $page = cache()->rememberForever('page_home_'.app()->getLocale(), function()  {
            return Page::whereTemplate( 'Home')->firstOrFail();
        });
        view()->share('page', $page);

        // Set meta tags
        $page->setMetaTags();

        // Set Localization
        $this->setLocalizationURLS($page);

        return view($page->getTemplate());
    }
}
