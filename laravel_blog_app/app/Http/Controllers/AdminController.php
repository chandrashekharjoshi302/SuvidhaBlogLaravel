<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $users = User::all();
        return view('admin.index', compact('blogs', 'users'));
    }

    public function toggleActive(Blog $blog)
    {
        $blog->update(['is_active' => !$blog->is_active]);
        return redirect()->route('admin.index');
    }
}
