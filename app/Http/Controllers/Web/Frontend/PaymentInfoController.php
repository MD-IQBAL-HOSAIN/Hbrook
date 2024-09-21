<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentInfoController extends Controller
{
     /**
     * Returns the payment info view with this data.
     *
     * @return View
     */
    public function index()
    {

        return view('frontend.layout.payment-info');
    }
}
