<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function add(Post $post)
    {
        Auth::user()->bookmarkingPosts()->attach($post->id);

        return redirect()->back();
    }
    public function remove(Post $post)
    {
        Auth::user()->bookmarkingPosts()->detach($post->id);

        return redirect()->back();
    }
}
