<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

/**
 * Upload an image and return its URL.
 *
 * @param  \Illuminate\Http\UploadedFile  $image
 * @param  string  $directory
 * @return string
 */
function uploadImage($image, $directory)
{
    try {
        $imageFileName = uniqid('image_') . '.' . $image->getClientOriginalExtension();
        $image->storeAs($directory, $imageFileName, 'public');
        return $directory . '/' . $imageFileName;
    } catch (Exception $e) {
        return redirect()->back()->with('t-error', 'Something went wrong');
    }
}


/**
 * Delete an image and return a boolean.
 *
 * @param  string  $imageUrl
 * @return bool
 */
function deleteImage($imageUrl)
{
    try {
        // Check if $imageUrl is a valid string
        if (is_string($imageUrl) && !empty($imageUrl)) {
            // Extract the relative path from the URL
            $parsedUrl = parse_url($imageUrl);
            $relativePath = $parsedUrl['path'] ?? '';

            // Remove the leading '/storage/' from the path
            $relativePath = preg_replace('/^\/?storage\//', '', $relativePath);

            // Check if the image exists
            if (Storage::disk('public')->exists($relativePath)) {
                // Delete the image if it exists
                Storage::disk('public')->delete($relativePath);
                return true;
            } else {
                // Return false if the image does not exist
                return false;
            }
        } else {
            // Return false if $imageUrl is not a valid string
            return false;
        }
    } catch (Exception $e) {
        // Handle any other exceptions
        return false;
    }

     // Upload Image
      function fileUpload($file, $folder, $name): string {
        $imageName = Str::slug($name) . '.' . $file->extension();
        $file->move(public_path('uploads/' . $folder), $imageName);
        return 'uploads/' . $folder . '/' . $imageName;
    }

    // Make Slug
    function makeSlug($modal, $title): string
    {
        $slug = $modal::where('slug', Str::slug($title))->first();
        if ($slug) {
            $randomString = Str::random(5);
            $slug = Str::slug($title) . $randomString;
        } else {
            $slug = Str::slug($title);
        }
        return $slug;
    }


function generateUniqueSlug($title, $table, $slugColumn = 'slug')
{
    // Generate initial slug
    $slug = str::slug($title);

    // Check if the slug exists
    $count = DB::table($table)->where($slugColumn, 'LIKE', "$slug%")->count();

    // If it exists, append the count
    return $count ? "{$slug}-{$count}" : $slug;
}
}
