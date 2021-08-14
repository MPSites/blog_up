<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

class PostController extends Controller
{

    public function __construct(){

        $this->middleware('auth', ['except' => [
            'index',
            'show',
            'getPosts',
            'searchPosts',
        ]]);

    }

    public function index(){

        $categories = Category::all();
        $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(4);
        //dd($posts);

        return view('pages.posts.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function show(Post $post){

        $comments = Comment::where('post_id', '=', $post->id)->paginate(3);
        //dd($comments);
        $posts = Post::with('user')->orderBy('created_at', 'desc')->limit(3)->get();
        //dd($post);
        return view('pages.posts.show',[
            'post' => $post,
            'comments' => $comments,
            'posts' => $posts
        ]);
    }

    public function add(){
        $categories = Category::all();
        return view('pages.posts.create', ['categories' => $categories]);
    }

    public function store(PostStoreRequest $request){

        //dd($request->image);

        DB::beginTransaction();
        try
        {
            $image = Post::uploadImage($request->image);
            $post = $request->user()->posts()->create($request->except('image') + ["image" => $image]);
            $post->categories()->attach($request->category_id);
            
            DB::commit();

            //return redirect()->route('posts.create')->with('success', 'Post added successfully!');
            return redirect()->back()->with('success', 'Post added successfully!');
        }
        catch(Exception $e)
        {
            DB::rollBack();
            //return redirect()->route('posts.create')->with('errorMessage', 'An error occurred!');
            return redirect()->back()->with('errorMessage', 'An error occurred!');
        }
    }

    public function edit(Post $post){

        //dd($post);
        $categories = Category::all();
        return view('pages.posts.edit', [
             'post' => $post,
             'categories' => $categories
        ]);
    }

    public function update(PostUpdateRequest $request, Post $post)
    {
        //dd("ok");

        try
        {
            $post->update($request->except('image'));
            $post->categories()->sync($request->category_id);

            if($request->has('image')){
                $image = Post::uploadImage($request->image);
                Post::deleteImage($post->image);
                $newImage = Post::uploadImage($request->image);
                $post->image = $newImage;
                $post->save();
            }
            
            // $post->save();

            DB::commit();

            //return redirect()->route('posts.edit', $post->id)->with('success', 'Post edited successfully!');
            return redirect()->back()->with([
                'success' => 'Post edited successfully!',
                $post->id
            ]);
        }
        catch(Exception $e)
        {
            DB::rollBack();
            //return redirect()->route('posts.edit', $post->id)->with('errorMessage', 'An error occurred!');
            return redirect()->back()->with([
                'errorMessage' => 'An error occurred!',
                $post->id
            ]);
        }
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        //dd($post);
        
        $post->delete();
        
        return redirect()->route('posts');
    }

    public function getPosts(Request $request){
        
        $categories = $request->categories;
        $sortValue = $request->sortValue;

        $model = new Post();

        $posts = $model->getPosts($categories, $sortValue)->paginate(4);

        return response()->json($posts);
    }

    public function searchPosts(Request $request){

        $categories = $request->categories;
        $srcKey = $request->srcKey;
        $sortValue = $request->sortValue;
        
        $model = new Post();

        $posts = $model->searchPosts($categories, $srcKey, $sortValue)->paginate(4);

        return response()->json($posts);
    }
}
