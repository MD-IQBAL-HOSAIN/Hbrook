<?php

namespace App\Http\Controllers\Web\Frontend;

use Exception;
use App\Models\CMS;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CommunityPost;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class CommunityController extends Controller
{
    /**
     * Get a cms Data than compect community view.
     * Returns the community view with this data.
     * on the others hand  return a post and post display coommunity view.
     */
    public function index()
    {
        $cms = CMS::get();
        $posts = CommunityPost::with('user')->orderBy("created_at", "desc")->paginate(10);
        return view('frontend.layout.community', compact('cms', 'posts'));
    }


    public function singlepost($slug)
    {
        $single_posts = CommunityPost::where('slug', $slug)->firstOrFail();
        $single_posts->increment('view_count');
        return view('frontend.layout.single_post', compact('single_posts'));
    }



    public function store(Request $request)
    {
        if (!auth()->check()) {
            return response()->json(['status' => 'error', 'message' => 'You need to login to post.'], 401);
        }

        $validator = Validator::make($request->all(), [
            'user_id' => 'nullable|integer',
            'title' => 'required|string|max:255',
            'tag' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',


        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        try {
            $image = null;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image = uploadImage($image, 'CommunityPost');
            }

            $posts = new CommunityPost();
            $posts->title = $request->title;
            $posts->slug = Str::slug($request->title);
            $posts->user_id = auth()->user()->id;
            $tags = json_decode($request->tag, true);
            $tagValues = array_map(function ($tag) {
                return $tag['value'];
            }, $tags ?? [] );
            $posts->tag = $tagValues;
            $posts->image = $image;
            $posts->description = $request->description;
            $posts->save();

            return response()->json(['status' => 'success', 'message' => 'Post created successfully'], 201);
        } catch (Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Post failed to create'], 500);
        }
    }
}
