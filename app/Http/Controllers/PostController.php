<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function destroy(Post $post)
    {
        DB::table('posts')->where('id', $post->id)->delete();
        DB::table('comments')->where('post_id', $post->id)->delete();
        DB::table('likes')->where('post_id', $post->id)->delete();
        return redirect()->back()->with("message", "Post Deleted!");
    }
    public function edit(Post $post)

    {
        $post = Post::where('id', $post->id)->first();
        return view("feed.editpost", compact("post"));
    }
    public function update(Post $post)
    {
        $post = Post::where('id', $post->id)->first();
        $post->body = request()->input('body');
        if (request()->hasFile('picture')) {
            $post->picture = request()->file('picture')->store('uploads');
        }
        $post->save();
        return redirect('/feed')->with("update", "Post Updated Successfully!");
    }
    public function like(Post $post)
    {
        $postparameters = [
            'post_id' => $post->id,
            'user_id' => auth()->user()->id
        ];
        $Likealreadyexists = Like::where(
            $postparameters
        )->count();

        if ($Likealreadyexists == 0) {
            $like = new Like(
                $postparameters
            );
            $like->save();
        } else {
            $like = Like::where(
                $postparameters
            )->first();
            $like->delete();
        }


        return $post->likes()->count();
        //return redirect()->back();
    }
    public function comment(Post $post)
    {
        $post = Post::where('id', $post->id)->first();

        return view("feed.comment", compact("post"));
    }
    public function storeComment(Post $post)
    {
        $validatedRequest = request()->validate([
            'data' => 'required|min:2',
        ]);

        $comment = new Comment($validatedRequest);
        $comment->post_id = $post->id;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return redirect()->back();
    }
    public function deleteComment(Post $post, Comment $comment)
    {
        $post = Post::where("id", $post->id);
        $comment = Comment::where('id', $comment->id)->delete();

        return redirect()->back();
    }
}
