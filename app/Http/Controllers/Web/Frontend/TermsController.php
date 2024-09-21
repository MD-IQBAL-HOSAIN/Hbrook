<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\CMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TermsController extends Controller
{
     /**
     * Returns the terms view with this data.
     *
     * @return View
     */
    public function index() {

        $cms = CMS::get();

        return view('frontend.layout.terms', compact('cms'));
    }
}
