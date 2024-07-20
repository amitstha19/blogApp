@extends('layouts.app')

@section('content')
    <h1>Blog Post</h1>
    <a href="{{ route('Posts.create') }}" class="btn btn-primary">Create Post</a>
     
        <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('Posts.show', $post->id) }}" >{{$post->title}}
            </li>
        @endforeach
    </ul>
    
@endsection