@extends('layouts.admin')

@section('title', 'Edit Department')

@section('content')
<header>
    <div>
        <h1>Edit Department: {{ $department->name }}</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Update details for the department below.</p>
    </div>
    <a href="{{ route('admin.departments.index') }}" class="btn-secondary">Back to List</a>
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

    <form action="{{ route('admin.departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Department Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $department->name) }}" required>
        </div>
        <div class="form-group">
            <label for="slug">URL Slug (Unique)</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug', $department->slug) }}" required>
        </div>
        <div class="form-group">
            <label for="icon">Icon character (Webflow specific glyph)</label>
            <input type="text" id="icon" name="icon" value="{{ old('icon', $department->icon) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5" required>{{ old('description', $department->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="is_active">Status</label>
            <select id="is_active" name="is_active">
                <option value="1" {{ old('is_active', $department->is_active) == '1' ? 'selected' : '' }}>Active (Show on Navbar and site)</option>
                <option value="0" {{ old('is_active', $department->is_active) == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-primary">Update Department</button>
            <a href="{{ route('admin.departments.index') }}" class="btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
