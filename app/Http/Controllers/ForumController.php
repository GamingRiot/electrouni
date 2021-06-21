<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\ForumTopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index(ForumTopic $forum)
    {
        $questions = $forum->forums()->get();
        return view("forum.forumQuestion", compact("forum", "questions"));
    }
    public function create(ForumTopic $forum)
    {
        return view("forum.createQuestion", compact("forum"));
    }
    public function store(ForumTopic $forum)
    {
        $validatedRequest = request()->validate([
            'title' => 'required|min:5|max:40',
            'description' => 'required|min:10|max:1024'
        ]);
        $ques = new Forum($validatedRequest);
        $ques->forum_topic_id = $forum->id;
        $ques->user_id = Auth::user()->id;
        $ques->save();
        return redirect()->back()->with("success", "Question Posted Successfuly!!");
    }
}
