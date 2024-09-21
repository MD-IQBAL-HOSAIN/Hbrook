<?php

namespace App\Http\Controllers\Web\Backend\CMS\BiographyPage;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BiographyPageContent;
use Illuminate\Support\Facades\Validator;

class BiographyPageController extends Controller
{
   /**
     * Display the biography page header view with Biography data.
     *
     * This method retrieves all Biography records and returns the biography page header view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the biography page header.
     */
    public function header()
    {
        $data = BiographyPageContent::all();
        return view('backend.layout.cms.biography-page.header.index', compact('data'));
    }

   /**
     * Display the discography page header view with discography data.
     *
     * This method retrieves all discography records and returns the discography page header view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the discography page header.
     */
    public function discographyHeader()
    {
        $data = BiographyPageContent::all();
        return view('backend.layout.cms.discography-page.header.index', compact('data'));
    }

   /**
     * Display the media page header view with media data.
     *
     * This method retrieves all media records and returns the media page header view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the media page header.
     */
    public function mediaHeader()
    {
        $data = BiographyPageContent::all();
        return view('backend.layout.cms.media-page.header.index', compact('data'));
    }

   /**
     * Display the shop page header view with shop data.
     *
     * This method retrieves all shop records and returns the shop page header view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the shop page header.
     */
    public function shopHeader()
    {
        $data = BiographyPageContent::all();
        return view('backend.layout.cms.shop-page.header.index', compact('data'));
    }

   /**
     * Display the media page header view with media data.
     *
     * This method retrieves all media records and returns the media page header view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the media page header.
     */
    public function mediaGallaryHeader()
    {
        $data = BiographyPageContent::all();
        return view('backend.layout.cms.media-page.header.gallary-header', compact('data'));
    }

      /**
     * Update the biography page header title, and image.
     * Takes input from a form, validates it, and updates the Biography Page entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function headerContentImage(Request $request)
    {
        $data = BiographyPageContent::findOrFail($request->id);

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
            $image_url = uploadImage($image, 'images/biography/header');
        }

        // Update the CMS entry with the new data
        $updated = $data->update([
            'title' => $request->title,
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
     * Display the biography page header view with Biography data.
     *
     * This method retrieves all Biography records and returns the biography page header view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the biography page header.
     */
    public function achievementHeader()
    {
        $data = BiographyPageContent::all();
        return view('backend.layout.cms.biography-page.header.achievement-header', compact('data'));
    }
   /**
     * Display the biography page header view with Biography data.
     *
     * This method retrieves all Biography records and returns the biography page header view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the biography page header.
     */
    public function gallaryHeader()
    {
        $data = BiographyPageContent::all();
        return view('backend.layout.cms.biography-page.header.gallary-header', compact('data'));
    }

   /**
     * Display the biography composition page header view with Biography data.
     *
     * This method retrieves all Biography records and returns the biography page header view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the biography page header.
     */
    public function compositionHeader()
    {
        $data = BiographyPageContent::all();
        return view('backend.layout.cms.biography-page.header.composition-header', compact('data'));
    }

      /**
     * Update the biography page header title, and image.
     * Takes input from a form, validates it, and updates the Biography Page entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function achievementHeaderContentImage(Request $request)
    {
        $data = BiographyPageContent::findOrFail($request->id);


        // Define the validation rules
        $rules = [
            'description' => 'nullable|string',
        ];

        // Create a validator instance with the request data and rules
        Validator::make($request->all(), $rules);

        // Update the CMS entry with the new data
        $updated = $data->update([
            'description' => $request->description,
            'sub_title' => $request->sub_title,
        ]);

        // Return back with a success or error toast message based on the update result

        if ($updated) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }

     /**
     * Display the discography slider header  view with discography slider header data.
     *
     * This method retrieves all discography slider header records and returns the discography slider header  view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the discography slider header .
     */
    public function discographySliderHeader()
    {
        $data = BiographyPageContent::all();
        return view('backend.layout.cms.discography-page.slider-header.index', compact('data'));
    }

      /**
     * Update the biography page header title, and image.
     * Takes input from a form, validates it, and updates the Biography Page entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function discographySliderHeaderContentImage(Request $request)
    {
        $data = BiographyPageContent::findOrFail($request->id);


        // Define the validation rules
        $rules = [
            'description' => 'nullable|string',
        ];

        // Create a validator instance with the request data and rules
        Validator::make($request->all(), $rules);

        // Update the CMS entry with the new data
        $updated = $data->update([
            'description' => $request->description,
            'sub_title' => $request->sub_title,
        ]);

        // Return back with a success or error toast message based on the update result

        if ($updated) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }

   /**
     * Display the landing page header view with Biography content data.
     *
     * This method retrieves all Biography records and returns the biography page header view
     * with the retrieved data.
     *
     * @return \Illuminate\View\View The view of the biography page header.
     */
    public function biographyContent()
    {
        $data = BiographyPageContent::all();
        return view('backend.layout.cms.biography-page.biography.content', compact('data'));
    }

      /**
     * Update the Biography content header title, and image.
     * Takes input from a form, validates it, and updates the Biography Page entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function biographyContentImage(Request $request)
    {
        $data = BiographyPageContent::findOrFail($request->id);

        // Initialize the image URL variable
        $image_url = null;

        // Define the validation rules
        $rules = [
            'image_url' => 'nullable|image|mimes:jpeg,jpg,png,svg,webp|max:2048',
            'link_url' => 'nullable|url',
        ];

        // Create a validator instance with the request data and rules
        Validator::make($request->all(), $rules);

        // Check if an image file is uploaded
        if ($request->has('image_url')) {
            // Handle the image file upload
            $image = $request->file('image_url');
            $image_url = uploadImage($image, 'images/biography/content');
        }

        // Update the CMS entry with the new data
        $updated = $data->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'button_text' => $request->button_text,
            'description' => $request->description,
            'link_url' => $request->link_url,
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
     * Delete the image from the Biography page entry in the database.
     * Takes input from a form, deletes the image file, and updates the Biography page entry.
     * Returns a success or error toast message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteContentImage(Request $request)
    {
        $image = BiographyPageContent::find($request->id);

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
