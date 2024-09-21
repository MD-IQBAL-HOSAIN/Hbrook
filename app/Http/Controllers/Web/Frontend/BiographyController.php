<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\CMS;
use App\Models\Blog;
use App\Models\GallaryImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\BiographyPageContent;

class BiographyController extends Controller
{
    /**
     * Returns the biography view with this data.
     *
     * @return View
     */
    public function index() {


        $blogs = Blog::with(['tags','user'])->where('status','Active')->get();
        $biographyCms = BiographyPageContent::get();
        $cms = CMS::get();
        $achievements = Achievement::get();
        $gallaryImages = GallaryImage::where('gallary_id',2)->get();
        $iconicSliders = GallaryImage::where('gallary_id',3)->get();

        return view('frontend.layout.biography',compact('blogs','biographyCms','cms','iconicSliders','achievements','gallaryImages'));
    }
}
