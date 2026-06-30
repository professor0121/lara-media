<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\GalleryItem;

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
        $latestPosts = BlogPost::orderBy('published_at', 'desc')->where('id', '!=', $post->id)->take(3)->get();

        return view('blogs.show', compact('post', 'latestPosts'));
    }

    public function blogIndex()
    {
        $posts = BlogPost::orderBy('published_at', 'desc')->paginate(10);

        return view('blogs.index', compact('posts'));
    }
}
