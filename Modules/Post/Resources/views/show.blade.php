@extends('post::layouts.master')

@section('content')
    <h1>Edit Post</h1>
    <a href="{{route('post.index')}}" class="btn btn-primary mb-4">Back</a>
    <form action="{{route('post.update', $post->slug)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
        </div>
        <div class="form-group mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary w-100">Update</button>
        </div>
    </form>
@endsection
