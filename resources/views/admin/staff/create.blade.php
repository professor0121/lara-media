@extends('layouts.admin')

@section('title', 'Add Staff Member')

@section('content')
<header>
    <div>
        <h1>Add New Staff Member</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Fill out the form below to register a new staff member.</p>
    </div>
    <a href="{{ route('admin.staff.index') }}" class="btn-secondary">Back to List</a>
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

    <form action="{{ route('admin.staff.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Staff Member Full Name (without Title)</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="e.g. Esther Howard" required>
        </div>
        <div class="form-group">
            <label for="slug">URL Slug (Unique)</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug') }}" placeholder="e.g. esther-howard (leave blank to auto-generate)">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', 'Ms.') }}" placeholder="e.g. Ms., Mr., Nurse">
        </div>
        <div class="form-group">
            <label for="role">Role / Position</label>
            <input type="text" id="role" name="role" value="{{ old('role') }}" placeholder="e.g. Senior Nurse Coordinator, Lab Tech" required>
        </div>
        <div class="form-group">
            <label for="image_path">Staff Image URL</label>
            <input type="text" id="image_path" name="image_path" value="{{ old('image_path', 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aaac7130beb68ae6c6f90_Rectangle%2075%20(2).webp') }}" placeholder="Image path url" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea id="bio" name="bio" rows="5" placeholder="Write qualifications, specialties, or description..." required>{{ old('bio') }}</textarea>
        </div>
        <div class="form-group">
            <label for="is_active">Status</label>
            <select id="is_active" name="is_active">
                <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>Active (Show on team lists)</option>
                <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-primary">Save Staff Member</button>
            <a href="{{ route('admin.staff.index') }}" class="btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
