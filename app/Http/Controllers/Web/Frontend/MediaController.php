<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\CMS;
use App\Models\Blog;
use App\Models\Interview;
use App\Models\GallaryImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BiographyPageContent;

class MediaController extends Controller
{
      /**
     * Returns the media view with this data.
     *
     * @return View
     */
    public function index() {

        $blogs = Blog::with(['tags','user'])->where('status','Active')->get();
        $allBlogs = Blog::with(['tags','user'])->where('status','Active')->get();

        $interviews = Interview::get();
        $cms = CMS::get();

        $gallaryImages = GallaryImage::where('gallary_id',2)->get();

        $biographyCms = BiographyPageContent::get();

        return view('frontend.layout.media',compact('blogs','biographyCms','allBlogs','interviews','cms','gallaryImages'));
    }
}
