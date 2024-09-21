<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\CMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
     /**
     * Returns the faq view with this data.
     *
     * @return View
     */
    public function index() {
        $cms = CMS::get();

        return view('frontend.layout.faq',compact('cms'));
    }
}
