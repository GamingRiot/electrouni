<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    public function index()
    {
        $posts = Post::with("user", "likes")->get()->reverse();
        return view("feed.feed", compact("posts"));
    }
    public function store()
    {
        $validatedRequest = request()->validate([
            'body' => 'required|min:2',
            'picture' => 'file|mimes:jpg,bmp,png|max:20000'
        ]);

        $post = new Post($validatedRequest);
        $post->likes->post_id = $post->id;
        $post->user_id = Auth::user()->id;
        if (request()->hasFile('picture')) {

            $post->picture = request()->file("picture")->store("uploads");
        }
        $post->save();
        return redirect('/feed')->with("success", "Status posted Successfully!");
    }
}
