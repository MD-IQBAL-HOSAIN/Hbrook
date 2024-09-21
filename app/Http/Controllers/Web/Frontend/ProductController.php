<?php

namespace App\Http\Controllers\Web\Frontend;


use App\Models\CMS;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show($slug)
    {
        // Fetch the blog post based on the slug
        $product = Product::with(['ptags'])->where('slug', $slug)->firstOrFail();

        $otherProducts = Product::with(['ptags'])
        ->where('status', 'Active')
        ->where('id', '!=', $product->id)
        ->take(10)
        ->get();
        $cms = CMS::get();

        // Return the view with the blog post data
        return view('frontend.layout.product-details', compact('product','otherProducts','cms'));
    }
}
