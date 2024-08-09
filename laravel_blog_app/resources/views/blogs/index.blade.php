@extends('layouts.app')

@section('content')
<div class="container">
    <h1>My Blogs</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add New Blog</a>
    <ul>
        @foreach ($blogs as $blog)
            <li>
                <h2>{{ $blog->title }}</h2>
                <p>{{ $blog->description }}</p>
                @if ($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" style="width: 200px;">
                @endif
                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
