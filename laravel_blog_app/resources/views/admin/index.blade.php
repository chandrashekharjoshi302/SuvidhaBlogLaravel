@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Panel</h1>
    <h2>Blogs</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Creator</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->description }}</td>
                    <td>
                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" style="width: 100px;">
                        @endif
                    </td>
                    <td>{{ $blog->user->name }}</td>
                    <td>
                        <form action="{{ route('admin.toggleActive', $blog->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-{{ $blog->is_active ? 'warning' : 'success' }}">
                                {{ $blog->is_active ? 'Deactivate' : 'Activate' }}
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h2>Users</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
