<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{

     /**
     * Display a listing of the resource.
     */
    public function index(){
        /*
        dd(Post::factory()->create());
        */
        //dd (Auth::user());
        //$posts = Post::all();
        $posts = Auth::user()->posts;
        // dd($posts);
        return view('Posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    /*  dd($request->all()); */
        $request ->validate([
            'title' =>'required',
            'content' =>'required',
        ]);
        Post::create($request->all());
        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post){
        if (Auth::id() != $post->id){
            abort(403);
        }
        //dd($post);
        return view('Posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
