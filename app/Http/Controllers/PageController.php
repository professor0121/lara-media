<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\GalleryItem;
use App\Models\Tag;

class PageController extends Controller
{
    public function home()
    {
        $departments = Department::where('is_active', true)->get();
        $doctors = Doctor::with('department')->get();
        $blogPosts = BlogPost::orderBy('published_at', 'desc')->take(3)->get();

        return view('home', compact('departments', 'doctors', 'blogPosts'));
    }

    public function about()
    {
        $doctors = Doctor::take(5)->get(); // For the team section

        return view('about', compact('doctors'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function gallery()
    {
        $galleryItems = GalleryItem::all();

        return view('gallery', compact('galleryItems'));
    }

    public function faq()
    {
        return view('faq');
    }

    public function department($slug)
    {
        $department = Department::where('slug', $slug)->firstOrFail();
        $departments = Department::where('is_active', true)->get(); // For submenu/list
        $doctors = $department->doctors;

        return view('departments.show', compact('department', 'departments', 'doctors'));
    }

    public function doctor($slug)
    {
        $doctor = Doctor::with('department')->where('slug', $slug)->firstOrFail();

        return view('doctors.show', compact('doctor'));
    }

    public function blog($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        $latestPosts = BlogPost::orderBy('published_at', 'desc')->where('id', '!=', $post->id)->take(5)->get();
        $categories = Category::all();
        $tags = Tag::all();

        return view('blogs.show', compact('post', 'latestPosts', 'categories', 'tags'));
    }

    public function blogIndex()
    {
        $query = BlogPost::query()->orderBy('published_at', 'desc');

        if (request('category')) {
            $query->whereHas('category', function ($q) {
                $q->where('slug', request('category'));
            });
        }

        if (request('tag')) {
            $query->whereHas('tags', function ($q) {
                $q->where('slug', request('tag'));
            });
        }

        $posts = $query->paginate(10)->withQueryString();
        $categories = Category::all();
        $tags = Tag::all();
        $latestPosts = BlogPost::orderBy('published_at', 'desc')->take(5)->get();

        return view('blogs.index', compact('posts', 'categories', 'tags', 'latestPosts'));
    }

    public function search()
    {
        $query = request('query');

        $departments = Department::where('is_active', true)
            ->where(function ($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%");
            })
            ->get();

        $doctors = Doctor::with('department')
            ->where(function ($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                    ->orWhere('specialty', 'like', "%{$query}%")
                    ->orWhere('bio', 'like', "%{$query}%");
            })
            ->get();

        $blogPosts = BlogPost::with('category')
            ->where(function ($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                    ->orWhere('summary', 'like', "%{$query}%")
                    ->orWhere('content', 'like', "%{$query}%");
            })
            ->get();

        return view('search', compact('query', 'departments', 'doctors', 'blogPosts'));
    }
}
