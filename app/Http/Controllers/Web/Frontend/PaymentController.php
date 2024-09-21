<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
     /**
     * Returns the payment view with this data.
     *
     * @return View
     */
    public function index()
    {

        return view('frontend.layout.payment');
    }
}
