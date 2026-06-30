<?php

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
