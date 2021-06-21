<?php

namespace App\Http\Controllers;

use App\Models\ForumTopic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ForumTopicsController extends Controller
{
    public function index()
    {
        $forums = ForumTopic::all();
        return view("forum.forum", compact("forums"));
    }
    public function create()
    {
        return view("forum.createForum");
    }
    public function store()
    {
        $validatedRequest = request()->validate([
            'title' => 'required|min:5|max:1024',
            'description' => 'required|min:10|max:1024'
        ]);
        $forum = new ForumTopic($validatedRequest);
        $forum->slug = Str::kebab($forum->title);
        $forum->save();
        return redirect()->back()->with("success", "Forum Topic Created!");
    }
}
