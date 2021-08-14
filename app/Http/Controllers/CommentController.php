<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{   
    public function index(Post $post)
    {
        return view('pages.admin.comments.create', ['post' => $post]);
    }

    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
            'content' => 'required|max:255',
        ]);
        
        //dd($post->id);

        $request->user()->comments()->create([
            'content' => $request->content,
            'post_id' => $post->id,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully');
    }

    public function destroy(Comment $comment)
    {
        //dd($comment->content);
        $comment->delete();
        
        return redirect()->back();
    }
}
