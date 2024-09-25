<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    // Display a listing of the users.
    public function index()
        {
            $posts = Post::all();
            return response()-> json ([
                'data' => $posts,
                'message' => "success",
            ], 200);
    
        }
}
