<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{

     /**
     * Display a listing of the resource.
     */
    public function index(){
        
        //dd(Post::factory()->create());
        
        //dd (Auth::user());
        $user=Auth::user();

        $posts = Post::all();
        
        //$posts = Auth::user()->posts;
        //$posts= Post::paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.posts.create');
    }


    /**
     * Remove the specified blog post from application.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')
                        ->with('success', 'Your Post Deleted Successfully.');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // debugging to show data
    /*  dd($request->all()); */
        $request ->validate([
            'title' =>'required',
            'content' =>'required',
        ]);
        
        //creating post and saving to database
        Post::create($request->all());
        
        //returning posts in index
        return redirect()->route('admin.posts.index');

    }

    /**
     * Display the specified resource.
     */
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('admin.posts.index')
                        ->with('success', 'Your Post Updated successfully.');
    }

    
    

    public function show(Post $post){
        // if (Auth::id() != $post->id){
        //     abort(403);
        // }
        //dd($post);
        return view('admin.posts.show', compact('post'));
    }
}
