<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\ForumComment;
use App\Models\ForumTopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumPostController extends Controller
{
    public function index(ForumTopic $forum, Forum $post)
    {
        return view("forum.forumPost", [
            'forum' => $forum,
            'forumposts' => $post
        ]);
    }
    public function store($forum, Forum $post)
    {
        $validatedRequest = request()->validate([
            'data' => 'required|min:2|max:1024'
        ]);
        $comment = new ForumComment($validatedRequest);
        $comment->user_id = Auth::user()->id;
        $comment->forum_post_id = $post->id;
        $comment->save();
        return redirect()->back()->with("success", "Comment Posted Successfuly!!");
    }
}
