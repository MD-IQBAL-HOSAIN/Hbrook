<?php

namespace App\Http\Controllers\Web\Backend\CMS\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LandingPageController extends Controller
{
    /**
     * Display the landing page banner view with CMS data.
     *
     * This method retrieves all CMS records and returns the landing page banner view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the landing page banner.
     */
    public function banner()
    {
        $data = CMS::all();
        return view('backend.layout.cms.landing-page.banner', compact('data'));
    }

    /**
     * Display the landing page biography view with CMS data.
     *
     * This method retrieves all CMS records and returns the landing page biography view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the landing page biography.
     */
    public function biography()
    {
        $data = CMS::all();
        return view('backend.layout.cms.landing-page.biography', compact('data'));
    }

    /**
     * Display the landing page biography profile view with CMS data.
     *
     * This method retrieves all CMS records and returns the landing page biography profile view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the landing page biography profile.
     */
    public function biographyProfile()
    {
        $data = CMS::all();
        return view('backend.layout.cms.landing-page.biography-profile', compact('data'));
    }


    /**
     * Update the landing page banner title, sub_title, button_text, button_url and image.
     * Takes input from a form, validates it, and updates the CMS entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function bannerContentImage(Request $request)
    {
        $data = CMS::findOrFail($request->id);



        // Update the CMS entry with the new data
        $updated = $data->update([
            // 'title' => $request->title,
            // 'sub_title' => $request->sub_title,
            'description' => $request->description,
            'button_text' => $request->button_text,
            // 'link_url' => $request->link_url,
        ]);

        // Return back with a success or error toast message based on the update result

        if ($updated) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }
    /**
     * Display the landing page store featured view with CMS data.
     *
     * This method retrieves all CMS records and returns the landing page store featured view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the landing page store featured.
     */
    public function storeFeatured()
    {
        $data = CMS::all();
        return view('backend.layout.cms.landing-page.store', compact('data'));
    }


    /**
     * Update the landing page banner title, sub_title, button_text, button_url.
     * Takes input from a form, validates it, and updates the CMS entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeFeaturedContentImage(Request $request)
    {
        $data = CMS::findOrFail($request->id);


        // Update the CMS entry with the new data
        $updated = $data->update([
            'description' => $request->description,
        ]);

        // Return back with a success or error toast message based on the update result

        if ($updated) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }

    /**
     * Display the landing page media view with CMS data.
     *
     * This method retrieves all CMS records and returns the landing page media view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the landing page media.
     */
    public function media()
    {
        $data = CMS::all();
        return view('backend.layout.cms.landing-page.media', compact('data'));
    }


    /**
     * Update the landing page media title, sub_title, button_text, button_url .
     * Takes input from a form, validates it, and updates the CMS entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function mediaContentImage(Request $request)
    {
        $data = CMS::findOrFail($request->id);

        // Update the CMS entry with the new data
        $updated = $data->update([
            'description' => $request->description,
        ]);

        // Return back with a success or error toast message based on the update result

        if ($updated) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }

    /**
     * Display the landing page note view with CMS data.
     *
     * This method retrieves all CMS records and returns the landing page note view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the landing page note.
     */
    public function note()
    {
        $data = CMS::all();
        return view('backend.layout.cms.note.note', compact('data'));
    }


    /**
     * Update the landing page note title, sub_title, button_text, button_url .
     * Takes input from a form, validates it, and updates the CMS entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function noteContentImage(Request $request)
    {
        $data = CMS::findOrFail($request->id);

        // Update the CMS entry with the new data
        $updated = $data->update([
             'title' => $request->title,
            'description' => $request->description,
        ]);

        // Return back with a success or error toast message based on the update result

        if ($updated) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }

    /**
     * Update the landing page biography title, sub_title, button_text, button_url and image.
     * Takes input from a form, validates it, and updates the CMS entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function biographyContentImage(Request $request)
    {
        $data = CMS::findOrFail($request->id);

        // Update the CMS entry with the new data
        $updated = $data->update([
            'description' => $request->description,
        ]);

        // Return back with a success or error toast message based on the update result

        if ($updated) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }

    /**
     * Display the landing page feature album view with CMS data.
     *
     * This method retrieves all CMS records and returns the landing page feature album view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the landing page feature album.
     */
    // public function featureAlbum()
    // {
    //     $data = CMS::all();
    //     return view('backend.layout.cms.landing-page.feature-album', compact('data'));
    // }


    /**
     * Update the landing page feature album title, sub_title, button_text, link_url, youtube_url, spotify_url, apple_url, button_url and image.
     * Takes input from a form, validates it, and updates the CMS entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function featureAlbumContentImage(Request $request)
    // {
    //     $data = CMS::findOrFail($request->id);

    //     // Initialize the image URL variable
    //     $image_url = null;

    //     // Handle audio upload
    //     $link_url = null;

    //     // Define the validation rules
    //     $rules = [
    //         'link_url' => 'nullable|mimes:mp3,wav|max:10240',
    //         'youtube_url' => 'nullable|url',
    //         'spotify_url' => 'nullable|url',
    //         'apple_url' => 'nullable|url',
    //     ];

    //     // Create a validator instance with the request data and rules
    //     Validator::make($request->all(), $rules);

    //     // Check if an image file is uploaded
    //     if ($request->has('link_url')) {
    //         // Handle the image file upload
    //         $audio = $request->file('link_url');
    //         $link_url = uploadImage($audio, 'audio/feature-album');
    //     }

    //     // Update the CMS entry with the new data
    //     $updated = $data->update([
    //         'title' => $request->title,
    //         'sub_title' => $request->sub_title,
    //         'youtube_url' => $request->youtube_url,
    //         'spotify_url' => $request->spotify_url,
    //         'apple_url' => $request->apple_url,
    //         'link_url' => $link_url ?? $data->link_url,
    //     ]);

    //     // Return back with a success or error toast message based on the update result

    //     if ($updated) {
    //         return redirect()->back()->with('t-success', 'Data Updated Successfully');
    //     } else {
    //         return redirect()->back()->with('t-error', 'Data update failed!');
    //     }
    // }
    /**
     * Display the landing page feature album view with CMS data.
     *
     * This method retrieves all CMS records and returns the landing page feature album view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the landing page feature album.
     */
    public function featureAlbumHeader()
    {
        $data = CMS::all();
        return view('backend.layout.cms.landing-page.feature-album-header', compact('data'));
    }



    /**
     * Display the landing page live interview view with CMS data.
     *
     * This method retrieves all CMS records and returns the landing page live interview view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the landing page live interview.
     */
    public function interview()
    {
        $data = CMS::all();
        return view('backend.layout.cms.interview.interview', compact('data'));
    }


    /**
     * Update the landing page interview title, link_url.
     * Takes input from a form, validates it, and updates the CMS entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function interviewContentImage(Request $request)
    {
        $data = CMS::findOrFail($request->id);

        // Initialize the image URL variable
        $image_url = null;

        // Define the validation rules
        $rules = [
            'image_url' => 'nullable|image|mimes:jpeg,jpg,png,svg,webp|max:2048',
            'youtube_url' => 'nullable|url',
        ];

        // Create a validator instance with the request data and rules
        Validator::make($request->all(), $rules);

        // Check if an image file is uploaded
        if ($request->has('image_url')) {
            // Handle the image file upload
            $image = $request->file('image_url');
            $image_url = uploadImage($image, 'images/cms/interview');
        }


        // Update the CMS entry with the new data
        $updated = $data->update([
            'title' => $request->title,
            'image_url' => $image_url ?? $data->image_url,
            'youtube_url' => $request->youtube_url,
        ]);

        // Return back with a success or error toast message based on the update result

        if ($updated) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }
    /**
     * Update the landing page biography title, sub_title, button_text, button_url and image.
     * Takes input from a form, validates it, and updates the CMS entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function biographyProfileContentImage(Request $request)
    {
        $data = CMS::findOrFail($request->id);

        // Initialize the image URL variable
        $image_url = null;

        // Define the validation rules
        $rules = [
            'image_url' => 'nullable|image|mimes:jpeg,jpg,png,svg,webp|max:2048',
        ];

        // Create a validator instance with the request data and rules
        Validator::make($request->all(), $rules);

        // Check if an image file is uploaded
        if ($request->has('image_url')) {
            // Handle the image file upload
            $image = $request->file('image_url');
            $image_url = uploadImage($image, 'images/cms/biography/profile');
        }

        // Update the CMS entry with the new data
        $updated = $data->update([
            'title' => $request->title,
            // 'sub_title' => $request->sub_title,
            'image_url' => $image_url ?? $data->image_url,
        ]);

        // Return back with a success or error toast message based on the update result

        if ($updated) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }

    /**
     * Delete the image from the CMS entry in the database.
     * Takes input from a form, deletes the image file, and updates the CMS entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteContentImage(Request $request)
    {
        $image = CMS::find($request->id);

        try {
            $result = deleteImage($image->image_url);

            $image->image_url = null;

            $image->save();

            if ($result) {
                return redirect()->back()->with('t-success', 'Deleted Successfully');
            } else {
                return redirect()->back()->with('t-error', 'No Image to Delete');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }
}
