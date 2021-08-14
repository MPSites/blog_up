<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function __construct(){
        
        $this->middleware(['auth']);
    }

    public function index(User $user)
    {
        $posts = $user->posts()->with(['user'])->orderBy('created_at', 'desc')->paginate(4);
        //dd($posts);
        return view('pages.main.user_dashboard', [
            'user' => $user,
            'posts' => $posts
        ]);
        
    }
}
