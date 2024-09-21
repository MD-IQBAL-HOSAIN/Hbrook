<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\CMS;
use Illuminate\View\View;
use App\Models\DynamicPage;
use App\Http\Controllers\Controller;

class DynamicPageController extends Controller {
     /**
     * index method handles the display of the dynamic page based on the page_slug
     *
     * @param string $page_slug
     * @return View
     */
    public function index(string $page_slug) {
        $pageData = DynamicPage::where('status', 'active')->where("page_slug", $page_slug)->first();
        $cms = CMS::get();
        return view('frontend.layout.dynamic_page', compact('pageData','cms'));
    }
}
