<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function create()
    {
        return view('pages.admin.categories.create');
    }

    public function store(Request $request)
    {
        //dd('category store');

        $this->validate($request, [
            'name' => 'required|max:255|unique:categories'
        ]);

        DB::beginTransaction();
        try
        {
            Category::create([
                'name' => $request->name,
            ]);
            
            DB::commit();

            //return redirect()->route('posts.create')->with('success', 'Post added successfully!');
            return redirect()->back()->with('success', 'Category added successfully!');
        }
        catch(Exception $e)
        {
            DB::rollBack();
            //return redirect()->route('posts.create')->with('errorMessage', 'An error occurred!');
            return redirect()->back()->with('errorMessage', 'An error occurred!');
        }
    }

    public function edit(Category $category)
    {
        return view('pages.admin.categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        try
        {
            $category->update($request->only('name'));
            
            $category->save();

            DB::commit();

            //return redirect()->route('posts.edit', $post->id)->with('success', 'Post edited successfully!');
            return redirect()->back()->with([
                'success' => 'Category edited successfully!',
                $category->id
            ]);
        }
        catch(Exception $e)
        {
            DB::rollBack();
            //return redirect()->route('posts.edit', $post->id)->with('errorMessage', 'An error occurred!');
            return redirect()->back()->with([
                'errorMessage' => 'An error occurred!',
                $category->id
            ]);
        }
    }

    public function delete(Category $category)
    {
        $category->delete();

        return redirect()->back();
    }
}
