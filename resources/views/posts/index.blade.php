@extends('layouts.app')

@section('content')
    <h1>Blog Post</h1>
    <a href="{{ route('Posts.create') }}" class="btn btn-primary">Create Post</a>
     
        <ul>
        @foreach ($Posts as $Post)
            <li>
                <a href="{{route('Posts.show', $Post->id) }}" >{{$Post->title}}
            </li>
        @endforeach
    </ul>
    
@endsection