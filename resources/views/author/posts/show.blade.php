@extends('admin.app')

@section('content')
    <h1>Blog Post Details</h1>   
    <a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
   
    <ul>
        <li>ID: {{ $post->_id }}</li>
        <li>Title: {{ $post->title }}</li>
        <li>Content: {{ $post->content }}</li>
    </ul>
@endsection