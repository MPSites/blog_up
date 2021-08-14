<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "body",
        "image"
    ];

    public static function uploadImage($image){
        $path = Storage::disk('public')->putFile('assets/images', $image);
        $exploded = explode('/', $path);
        return $exploded[count($exploded) - 1];
    }

    public static function deleteImage($image){
        Storage::disk('public')->delete('assets/images/' . $image);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function getPosts($categories, $sortValue){

        $posts = Post::with('categories','user','comments');

        if(is_array($categories)){

            $posts->whereHas('categories', function($query) use ($categories){

                return $query->whereIn('name', $categories);

            });

        }
        if($sortValue){

            $posts->orderBy('created_at', $sortValue);
        }

        return $posts;
    }

    public function searchPosts($categories, $scrKey, $sortValue){

        $posts = Post::with('categories','user','comments');

        if(is_array($categories)){

            $posts->whereHas('categories', function($query) use ($categories){

                return $query->whereIn('name', $categories);

            });

        }
        $posts->where('title', 'like', '%'. $scrKey. '%');
        if($sortValue){

            $posts->orderBy('created_at', $sortValue);
        }

        return $posts;
    }
}
