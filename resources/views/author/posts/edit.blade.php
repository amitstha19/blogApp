@extends('admin.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 margin-tb">
            <div class="pull-left">
                <h2>Edit Posts</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('author.posts.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Sorry Someting wrong in your input </strong><br>
            <ul>
                @foreach ($errors->all() as $error)
                <!-- displaying error message  -->
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<!-- creating form to edit content -->
    <form action="{{ route('author.posts.update', $post->_id) }}" method="POST" >

        @csrf
        @method('PUT')

        <div class="row-xs-12">
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <p>Title:</p>
                    <input type="text" name="Blog Title" value="{{ $post->title }}" class="form-control" placeholder="Blog Title">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <p>Content:</p>
                    <textarea class="form-control" style="height:150px" name="content" placeholder="Content">{{ $post->content }}</textarea>
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                <!-- submit button for editing content -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection