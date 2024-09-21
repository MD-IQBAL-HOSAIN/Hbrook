<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\CMS;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function show($slug)
    {
        // Fetch the blog post based on the slug
        $blog = Blog::with(['user','tags'])->where('slug', $slug)->firstOrFail();

        $otherBlogs = Blog::with(['tags'])
        ->where('status', 'Active')
        ->where('id', '!=', $blog->id)
        ->take(10)
        ->get();
        $cms = CMS::get();

        // Return the view with the blog post data
        return view('frontend.layout.blog', compact('blog','otherBlogs','cms'));
    }
}
