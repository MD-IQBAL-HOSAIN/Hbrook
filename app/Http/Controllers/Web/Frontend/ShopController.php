<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\CMS;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BiographyPageContent;

class ShopController extends Controller
{
      /**
     * Returns the shop view with this data.
     *
     * @return View
     */
    public function index() {

        $cms = CMS::get();
        $biographyCms = BiographyPageContent::get();
        $featureProducts = Product::with(['ptags','images'])->where('is_featured','Yes')->where('status','Active')->paginate(6, ['*'], 'featured_page');;


        $categories = Category::with(['products.ptags'])
        ->get()
        ->map(function ($category) {
            $category->products = $category->products()->where('status', 'Active')->paginate(6, ['*'], 'category_' . $category->id . '_page');; // Change 10 to the number of products per page you want
            return $category;
        });

        return view('frontend.layout.shop',compact('cms','biographyCms','featureProducts','categories'));
    }
}
