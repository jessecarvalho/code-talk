<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/posts", function () {
    return response()->json(App\Models\Post::all());
});

Route::get('/posts/{quantity}', function ($quantity = null) {
    return response()->json(App\Models\Post::take($quantity)->get());
});

Route::get('/post/{id}', function ($slug = null) {
    return response()->json(App\Models\Post::where("slug", $slug)->first());
});

Route::get("categories", function () {
    return response()->json(App\Models\Category::all());
});

Route::get("categories/{id}", function ($id = null) {
    return response()->json(App\Models\Category::find($id));
});

