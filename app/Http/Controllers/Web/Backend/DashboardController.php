<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Campaign;
use App\Models\FAQ;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Subscribe;
use App\Models\UpcomingProject;
use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller {
    /**
     * Display the backend dashboard.
     *
     * @return View
     */
    public function index() {
        $user= User::where('role','user')->get()->count();
        $product = Product::get()->count();


        return view('backend.layout.dashboard', compact(
            'user', 'product'
        ));
    }
}
