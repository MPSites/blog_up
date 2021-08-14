<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'Admin']);
    }

    public function index() 
    {
        $users = User::all();
        $posts = Post::all();
        $comments = Comment::all();
        $categories = Category::all();
        $topAuth = User::withCount(['posts' => function ($query) {
            $query->where('created_at', '>=', Carbon::now()->subDay());
        }])->orderBy('posts_count', 'DESC')
            ->take(5)
            ->get();
        //dd($topAuth);
        return view('pages.admin.statistics', [
            "users" => $users,
            "posts" => $posts,
            "comments" => $comments,
            "categories" => $categories,
            "topAuth" => $topAuth
        ]);
    }

    public function show()
    {
        return view('pages.admin.details');
    }

    public function users_show() 
    {
        $users = User::orderBy('created_at', 'DESC')->paginate(5);
        return view('pages.admin.users.index', ["users" => $users]);
    }

    public function posts_show() 
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(5);
        return view('pages.admin.posts.index', ["posts" => $posts]);
    }

    public function categories_show()
    {
        $categories = Category::orderBy('created_at', 'DESC')->paginate(5);
        return view('pages.admin.categories.index', ["categories" => $categories]);
    }

    public function comments_show()
    {
        $comments = Comment::orderBy('created_at', 'DESC')->paginate(5);
        //dd($comments);
        return view('pages.admin.comments.index', ["comments" => $comments]);
    }

    public function post_create() 
    {
        $categories = Category::all();
        return view('pages.admin.posts.create', ["categories" => $categories]);
    }

    public function post_edit(Post $post)
    {

        //dd($post);
        $categories = Category::all();
        return view('pages.admin.posts.edit', [
             'post' => $post,
             'categories' => $categories
        ]);
    }

}
