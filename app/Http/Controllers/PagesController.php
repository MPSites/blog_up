<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function index(){
        $categories = Category::all();
        $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(4);
        //dd($posts);

        return view('pages.posts.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function about(){
        return view('pages.main.about');
    }

    public function contact(){
        return view('pages.main.contact');
    }

}
