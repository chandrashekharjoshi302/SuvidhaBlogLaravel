<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('user_id', auth()->id())->get();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image'
        ]);

        $path = $request->file('image') ? $request->file('image')->store('images') : null;

        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $path,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('blogs.index');
    }

    public function edit(Blog $blog)
    {
        $this->authorize('update', $blog);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $this->authorize('update', $blog);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image'
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('images');
            $blog->update(['image' => $path]);
        }

        $blog->update($request->only('title', 'description'));

        return redirect()->route('blogs.index');
    }

    public function destroy(Blog $blog)
    {
        $this->authorize('delete', $blog);
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
