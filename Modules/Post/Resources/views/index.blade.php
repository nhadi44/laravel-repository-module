@extends('post::layouts.master')

@section('content')
    <header>
        <h1>Posts</h1>
    </header>
    <a href="{{route('post.create')}}" class="btn btn-primary mb-4">Create new post</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <a href="{{route('post.show', $post->slug)}}" class="btn btn-primary">Edit</a>

                        <form action="{{route('post.delete', $post->slug)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
