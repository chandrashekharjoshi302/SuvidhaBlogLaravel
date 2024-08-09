@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Blog</h1>
    {{-- <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data"> --}}
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    {{-- </form> --}}
</div>
@endsection
