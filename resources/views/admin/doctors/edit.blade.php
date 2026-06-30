@extends('layouts.admin')

@section('title', 'Edit Doctor')

@section('content')
<header>
    <div>
        <h1>Edit Doctor: {{ $doctor->title }} {{ $doctor->name }}</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Update details for the doctor below.</p>
    </div>
    <a href="{{ route('admin.doctors.index') }}" class="btn-secondary">Back to List</a>
</header>

<div class="card-form">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Doctor's Full Name (without Title)</label>
            <input type="text" id="name" name="name" value="{{ old('name', $doctor->name) }}" required>
        </div>
        <div class="form-group">
            <label for="slug">URL Slug (Unique)</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug', $doctor->slug) }}" required>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $doctor->title) }}" required>
        </div>
        <div class="form-group">
            <label for="specialty">Specialty</label>
            <input type="text" id="specialty" name="specialty" value="{{ old('specialty', $doctor->specialty) }}" required>
        </div>
        <div class="form-group">
            <label for="department_id">Department</label>
            <select id="department_id" name="department_id" required>
                @foreach($departments as $dept)
                    <option value="{{ $dept->id }}" {{ old('department_id', $doctor->department_id) == $dept->id ? 'selected' : '' }}>{{ $dept->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image_path">Doctor Image URL</label>
            <input type="text" id="image_path" name="image_path" value="{{ old('image_path', $doctor->image_path) }}" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea id="bio" name="bio" rows="5" required>{{ old('bio', $doctor->bio) }}</textarea>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-primary">Update Doctor</button>
            <a href="{{ route('admin.doctors.index') }}" class="btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
