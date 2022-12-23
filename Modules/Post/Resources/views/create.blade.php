@extends('post::layouts.master')
@section('content')
    <div>
        <h1>Create Post</h1>

        <form action="{{route('post.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100">Create</button>
            </div>
        </form>
    </div>
@endsection
