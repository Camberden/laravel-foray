<?php

// GONNA SPEND A LOT OF TIME IN THIS FILE!!!
// IT'S GOOD TO HAVE THESE PUT INTO THEIR OWN FILES SEGREGATED BY PURPOSE

// TO RUN: php artisan serve

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {

    if (auth()->check()) {
        $posts = auth()->user()->usersNiftyPosts()->latest()->get();
    }

    // $posts = auth()->user()->usersNiftyPosts()->latest()->get();
    // $posts = Post::all();
    // $posts = Post::where("user_id", auth()->id())->get();
    return view('home', ["posts" => $posts]); //changes to my "home" as index
});
// >>>>>>>>> URI >>>>>>>>> The Class where it is >> the function
Route::post('/register', [UserController::class, 'register']);
Route::post("/logout", [UserController::class, "logout"]);
Route::post("/login", [UserController::class, "login"]);

Route::post("/create-post", [PostController::class, "createPost"]);