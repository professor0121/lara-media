<?php

use App\Models\BlogPost;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->seed();
});

test('pages return successful status', function () {
    $this->get(route('home'))->assertStatus(200);
    $this->get(route('about'))->assertStatus(200);
    $this->get(route('contact'))->assertStatus(200);
    $this->get(route('gallery'))->assertStatus(200);
    $this->get(route('faq'))->assertStatus(200);
    $this->get(route('blog.index'))->assertStatus(200);
});

test('details pages return successful status', function () {
    $department = Department::first();
    $doctor = Doctor::first();
    $blogPost = BlogPost::first();

    $this->get(route('departments.show', $department->slug))->assertStatus(200);
    $this->get(route('doctors.show', $doctor->slug))->assertStatus(200);
    $this->get(route('blog.show', $blogPost->slug))->assertStatus(200);
});

test('appointments can be stored with validation', function () {
    $data = [
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'Phone-Number-2' => '1234567890',
        'Schedule-2' => 'tomorrow afternoon',
        'Message-2' => 'Hello, I would like to book a general checkup.',
    ];

    $response = $this->post(route('appointments.store'), $data);

    $response->assertRedirect();
    $response->assertSessionHasNoErrors();
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('appointments', [
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'phone' => '1234567890',
        'preferred_time' => 'tomorrow afternoon',
        'message' => 'Hello, I would like to book a general checkup.',
    ]);
});

test('appointments store validation errors', function () {
    $response = $this->post(route('appointments.store'), []);

    $response->assertSessionHasErrors(['name', 'email', 'Phone-Number-2', 'Schedule-2']);
    $this->assertDatabaseCount('appointments', 0);
});

test('admin guest access redirects to login', function () {
    $this->get(route('admin.dashboard'))->assertRedirect(route('admin.login'));
    $this->get(route('admin.departments.index'))->assertRedirect(route('admin.login'));
});

test('admin login screen returns 200', function () {
    $this->get(route('admin.login'))->assertStatus(200);
});

test('admin can log in and view dashboard', function () {
    $response = $this->post(route('admin.login.submit'), [
        'email' => 'admin@mediabundle.com',
        'password' => 'password',
    ]);

    $response->assertRedirect(route('admin.dashboard'));
    $response->assertSessionHas('admin_user_id');

    $response2 = $this->withSession(['admin_user_id' => 1])->get(route('admin.dashboard'));
    $response2->assertStatus(200);
});

test('admin can manage staff CRUD', function () {
    $response = $this->withSession(['admin_user_id' => 1])
        ->post(route('admin.staff.store'), [
            'name' => 'John Support',
            'slug' => 'john-support',
            'title' => 'Mr.',
            'role' => 'IT Engineer',
            'image_path' => 'url',
            'bio' => 'IT support bio description',
            'is_active' => true,
        ]);

    $response->assertRedirect(route('admin.staff.index'));
    $this->assertDatabaseHas('staff', [
        'name' => 'John Support',
        'role' => 'IT Engineer',
    ]);
});
