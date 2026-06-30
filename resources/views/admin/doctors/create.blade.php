@extends('layouts.admin')

@section('title', 'Add Doctor')

@section('content')
<header>
    <div>
        <h1>Add New Doctor</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Fill out the form below to register a new doctor.</p>
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

    <form action="{{ route('admin.doctors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Doctor's Full Name (without Title)</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="e.g. Emily Thompson" required>
        </div>
        <div class="form-group">
            <label for="slug">URL Slug (Unique)</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug') }}" placeholder="e.g. dr-emily-thompson (leave blank to auto-generate)">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', 'Dr.') }}" placeholder="e.g. Dr., Prof. Dr., Mr." required>
        </div>
        <div class="form-group">
            <label for="specialty">Specialty</label>
            <input type="text" id="specialty" name="specialty" value="{{ old('specialty') }}" placeholder="e.g. Neurologist, Cardiologist" required>
        </div>
        <div class="form-group">
            <label for="department_id">Department</label>
            <select id="department_id" name="department_id" required>
                <option value="">-- Select Department --</option>
                @foreach($departments as $dept)
                    <option value="{{ $dept->id }}" {{ old('department_id') == $dept->id ? 'selected' : '' }}>{{ $dept->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image_path">Doctor Image URL</label>
            <input type="text" id="image_path" name="image_path" value="{{ old('image_path', 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aaac7130beb68ae6c6f90_Rectangle%2075%20(2).webp') }}" placeholder="Image path url" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea id="bio" name="bio" rows="5" placeholder="Write doctor's qualifications, expertise, and brief description..." required>{{ old('bio') }}</textarea>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-primary">Save Doctor</button>
            <a href="{{ route('admin.doctors.index') }}" class="btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
