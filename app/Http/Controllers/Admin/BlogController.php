<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderByDesc('id')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogs = Blog::orderByDesc('id')->get();
        return view('admin.blogs.create', compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:20',
            'heading' => 'required|string|max:50',   // max 50 characters
            'content' => 'required|string|max:500', // max 500 characters
            'published_at' => 'required|date',
            'author' => 'required',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->heading = $request->heading;
        $blog->content = $request->content;
        $blog->published_at = $request->published_at;
        $blog->author = $request->author;

        $warning = null;

    if ($request->hasFile('image')) {
        $file = $request->file('image');

        // Check size in KB
        if ($file->getSize() > 295 * 1024) {
            $warning = "Image size should be less than 295 KB.";
            return redirect()->back()->withInput()->with('warning', $warning);
        }

        // Check dimensions
      
        // If no warnings, store image
        if (!$warning) {
            $imagePath = $file->store('blogs', 'public');
            $blog->image_url = 'storage/' . $imagePath;
        }
    }
        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully')->with('warning', $warning);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $blogs = Blog::orderByDesc('id')->get();
        return view('admin.blogs.show', compact('blog', 'blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $blogs = Blog::orderByDesc('id')->get();
        return view('admin.blogs.edit', compact('blog', 'blogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
            $request->validate([
            'title' => 'required|string|max:20',
            'heading' => 'required|string|max:50',   // max 50 characters
            'content' => 'required|string|max:500', // max 500 characters
            'published_at' => 'required|date',
            'author' => 'required',
        ]);

        $blog->title = $request->title;
        $blog->heading = $request->heading;
        $blog->content = $request->content;
        $blog->published_at = $request->published_at;
        $blog->author = $request->author;

        $warning = null;

    if ($request->hasFile('image')) {
        $file = $request->file('image');

        // Check size in KB
        if ($file->getSize() > 295 * 1024) {
            $warning = "Image size should be less than 295 KB.";
            return redirect()->back()->withInput()->with('warning', $warning);
        }
       

        // If no warnings, store image
        if (!$warning) {
            $imagePath = $file->store('blogs', 'public');
            $blog->image_url = 'storage/' . $imagePath;
        }
    }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully')->with('warning', $warning);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully');
    }
}
