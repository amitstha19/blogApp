
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2>Blog Posts</h2>
            <a class="btn btn-primary" href="{{ route('posts.create') }}">Create New Post</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table bg-primary">
        <tr>
            <th>Post ID</th> 
            <th>Post Title</th>
            <th>Post Description</th>
            <th width="320px">Functions</th>
        </tr>
        @php $a= 0; @endphp
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$a }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->_id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('posts.show',$post->_id) }}">Show</a>
                    <a class="btn btn-prmary" href="{{ route('posts.edit',$post->_id) }}">Edit</a> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

  
@endsection
