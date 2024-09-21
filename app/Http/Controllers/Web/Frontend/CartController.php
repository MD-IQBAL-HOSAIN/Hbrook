<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
     /**
     * Returns the cart view with this data.
     *
     * @return View
     */
    public function index()
    {

        return view('frontend.layout.cart');
    }
}
