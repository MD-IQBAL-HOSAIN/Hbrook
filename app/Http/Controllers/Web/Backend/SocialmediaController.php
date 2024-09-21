<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class SocialmediaController extends Controller {
    /**
     * Display a listing of the social media links.
     *
     * @return View
     */
    public function index() {
        // Assuming 'setting' is the correct table name
        $social_link = SocialMedia::latest('id')->get();
        return view('backend.layout.system_setting.socialmedia', compact('social_link'));
    }

    /**
     * Update the specified social media links in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request) {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'social_media.*'    => 'required|string',
            'profile_link.*'    => 'required|url',
            'social_media_id.*' => 'sometimes|nullable|integer',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $idsToUpdate = collect($request->social_media_id)->filter()->all();

            // Update existing entries and collect their IDs
            foreach ($request->social_media as $index => $media) {
                $profileLink   = $request->profile_link[$index] ?? null;
                $socialMediaId = $request->social_media_id[$index] ?? null;

                if ($media && $profileLink) {
                    $socialMedia               = $socialMediaId ? SocialMedia::find($socialMediaId) : new SocialMedia();
                    $socialMedia->social_media = $media;
                    $socialMedia->profile_link = $profileLink;
                    $socialMedia->save();

                    // If updating, remove this ID from the $idsToUpdate array
                    if (($key = array_search($socialMediaId, $idsToUpdate)) !== false) {
                        unset($idsToUpdate[$key]);
                    }
                }
            }

            SocialMedia::whereIn('id', $idsToUpdate)->delete();

            return back()->with('t-success', 'Social media links updated successfully.');
        } catch (Exception) {
            return back()->with('t-error', 'Social media links failed update.');
        }
    }

    /**
     * Remove the specified social media link from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id) {
        try {
            // Correctly delete the SocialMedia record by ID
            SocialMedia::destroy($id);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Social media link deleted successfully.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete social media link.',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }
}
