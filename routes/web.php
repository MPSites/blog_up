<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/** Auth **/

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

/** Pages **/

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

/** Korisnicke strane **/

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/details', [AdminController::class, 'show'])->name('admin_details');

/** Admin strana CRUD **/

Route::get('/admin/users', [AdminController::class, 'users_show'])->name('admin_users');
Route::get('/admin/posts', [AdminController::class, 'posts_show'])->name('admin_posts');
Route::get('/admin/categories', [AdminController::class, 'categories_show'])->name('admin_cats');
Route::get('/admin/comments', [AdminController::class, 'comments_show'])->name('admin_comments');

Route::get('/admin/posts/create', [AdminController::class, 'post_create'])->name('admin_post_create');
Route::get('/admin/{post}/edit', [AdminController::class, 'post_edit'])->name('admin_post_edit');

/** Admin/User CRUD **/

Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin_user_create');
Route::post('/admin/users/store', [UserController::class, 'store'])->name('admin_user_store');
Route::get('/admin/user_edit/{user}', [UserController::class, 'edit'])->name('admin_user_edit');
Route::put('/admin/user_edit/{user}', [UserController::class, 'update'])->name('admin_user_update');
Route::delete('/admin/user_delete/{user}', [UserController::class, 'delete'])->name('admin_user_delete');

/** Admin/Category CRUD **/

Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('cat_create');
Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('cat_store');
Route::get('/admin/category/{category}/edit', [CategoryController::class, 'edit'])->name('cat_edit');
Route::put('/admin/category/{category}/edit', [CategoryController::class, 'update'])->name('cat_update');
Route::delete('/admin/category/{category}/delete', [CategoryController::class, 'delete'])->name('cat_delete');

/** Posts rute **/

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/create', [PostController::class, 'add'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

/** Sortiranje i search **/
Route::get('/posts/fetch', [PostController::class, 'getPosts']);
Route::get('/posts/search', [PostController::class, 'searchPosts']);

/** Prikaz jednog post-a **/
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post');

/** Edit/Update/Delete **/
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.delete');

/** Comments **/
Route::get('/admin/{post}/commets/create', [CommentController::class, 'index'])->name('admin_comment_add');
Route::post('/posts/{post}/commets/create', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/admin/{comment}/delete', [CommentController::class, 'destroy'])->name('comments_delete');







