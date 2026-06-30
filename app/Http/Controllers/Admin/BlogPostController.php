<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('tags')->get();

        return view('admin.blogs.index', compact('posts'));
    }

    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();

        return view('admin.blogs.create', compact('tags', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:blog_posts,slug',
            'summary' => 'required|string|max:255',
            'content' => 'required|string',
            'image_path' => 'required|string|max:255',
            'published_at' => 'required|date',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $slug = $request->slug ? Str::slug($request->slug) : Str::slug($request->title);

        $post = BlogPost::create([
            'title' => $request->title,
            'slug' => $slug,
            'summary' => $request->summary,
            'content' => $request->input('content'),
            'image_path' => $request->image_path,
            'published_at' => $request->published_at,
            'category_id' => $request->category_id,
        ]);

        if ($request->has('tags')) {
            $post->tags()->sync($request->tags);
        }

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post published successfully!');
    }

    public function edit(BlogPost $blog)
    {
        $post = $blog;
        $tags = Tag::all();
        $categories = Category::all();

        return view('admin.blogs.edit', compact('post', 'tags', 'categories'));
    }

    public function update(Request $request, BlogPost $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blog_posts,slug,'.$blog->id,
            'summary' => 'required|string|max:255',
            'content' => 'required|string',
            'image_path' => 'required|string|max:255',
            'published_at' => 'required|date',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'summary' => $request->summary,
            'content' => $request->input('content'),
            'image_path' => $request->image_path,
            'published_at' => $request->published_at,
            'category_id' => $request->category_id,
        ]);

        $blog->tags()->sync($request->tags ?? []);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated successfully!');
    }

    public function destroy(BlogPost $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post deleted successfully!');
    }
}
