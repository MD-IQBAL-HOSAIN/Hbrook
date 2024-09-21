<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\CMS;
use App\Models\FeatureAlbum;
use App\Models\GallaryImage;
use Illuminate\Http\Request;
use App\Models\UpcommingAlbumImage;
use App\Http\Controllers\Controller;
use App\Models\BiographyPageContent;

class DiscographyController extends Controller
{
      /**
     * Returns the discography view with this data.
     *
     * @return View
     */
    public function index() {

        $biographyCms = BiographyPageContent::get();
        $sliderImage = UpcommingAlbumImage::get();
        $gallaryImages = GallaryImage::where('gallary_id',4)->get();
        $cms = CMS::get();

        $featureAlbums = FeatureAlbum::get();

        $songsFromBackend = $featureAlbums->map(function ($album) {
            return [
                'path' => asset('storage/' . $album->audio_url), // Adjust to match your file name field
                'displayName' => $album->title,
                'artist' => 'Jean Renard', // Example artist name
                'cover' => asset('storage/' . $album->image_url), // Adjust to match your cover_url field
            ];
        });

        return view('frontend.layout.discography',compact('biographyCms','sliderImage','gallaryImages','cms','songsFromBackend'));
    }
}
