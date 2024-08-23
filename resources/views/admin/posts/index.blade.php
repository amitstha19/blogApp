
@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Blog Posts</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          <a class="btn btn-sm btn-outline-secondary" href="{{ route('admin.posts.create') }}">Create New Post</a>
        
          </div>
           
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
                <form action="{{ route('admin.posts.destroy',$post->_id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('admin.posts.show',$post->_id) }}">Show</a>
                    <a class="btn btn-prmary" href="{{ route('admin.posts.edit',$post->_id) }}">Edit</a> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

  
@endsection

