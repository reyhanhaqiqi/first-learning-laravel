<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Route;

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

// Route Index Home Page
Route::get('/', function () {
    return view('pages/home', [
        'title' => 'Home'
    ]);
});

// Route About Page
Route::get('/about', function () {
    return view('pages/about', [
        'title' => 'About',
        'name' => 'Reyhan Haqiqi A.F',
        'desc' => 'Learning Laravel'
    ]);
});

// Route Blog Page 
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('pages/categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('pages/category', [
        'title' => $category->name,
        'articles' => $category->posts,
        'category' => $category->name
    ]);
});
