<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\CMS;
use Illuminate\View\View;
use App\Models\GallaryImage;
use App\Models\UpcommingAlbumImage;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\FeatureAlbum;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Returns the home view with this data.
     *
     * @return View
     */


    public function index()
    {

        $sliderImage = UpcommingAlbumImage::get();
        $cms = CMS::get();
        $gallaryImage = GallaryImage::where('gallary_id',1)->get();
        $products = Product::with(['ptags','images'])->where('is_featured','Yes')->where('status','Active')->paginate(6);
        $blogs = Blog::with(['tags','user'])->where('status','Active')->get();

        $featureAlbums = FeatureAlbum::get();

        $songsFromBackend = $featureAlbums->map(function ($album) {
            return [
                'path' => asset('storage/' . $album->audio_url), // Adjust to match your file name field
                'displayName' => $album->title,
                'artist' => 'Jean Renard', // Example artist name
                'cover' => asset('storage/' . $album->image_url), // Adjust to match your cover_url field
            ];
        });

        return view('frontend.layout.home',compact('sliderImage','cms','gallaryImage','products','blogs','featureAlbums','songsFromBackend'));
    }
}
