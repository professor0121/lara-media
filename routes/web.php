<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;
use App\Http\Controllers\Admin\BlogPostController as AdminBlogPostController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\DepartmentController as AdminDepartmentController;
use App\Http\Controllers\Admin\DoctorController as AdminDoctorController;
use App\Http\Controllers\Admin\StaffController as AdminStaffController;
use App\Http\Controllers\Admin\TagController as AdminTagController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/department/{slug}', [PageController::class, 'department'])->name('departments.show');
Route::get('/doctor/{slug}', [PageController::class, 'doctor'])->name('doctors.show');
Route::get('/blogs', [PageController::class, 'blogIndex'])->name('blog.index');
Route::get('/blogs/{slug}', [PageController::class, 'blog'])->name('blog.show');

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

// Admin Login Routes
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.login.submit');

// Protected Admin Routes
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::resource('departments', AdminDepartmentController::class);
    Route::resource('doctors', AdminDoctorController::class);
    Route::resource('staff', AdminStaffController::class);
    Route::resource('blogs', AdminBlogPostController::class);
    Route::resource('tags', AdminTagController::class);
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('appointments', AdminAppointmentController::class)->only(['index', 'show', 'destroy']);
});
