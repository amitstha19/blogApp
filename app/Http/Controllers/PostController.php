<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource in JSON format.
     */
    public function index()
    {
        // Fetch all posts and return as a JSON response
        $posts = Post::all();
        return response()->json($posts);
    }

    /**
     * Display the specified resource in JSON format.
     */
    public function show($id)
    {
        // Find the post by its ID and return as a JSON response
        $post = Post::findOrFail($id);
        return response()->json($post);
    }
}
