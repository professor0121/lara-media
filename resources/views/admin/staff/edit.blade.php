@extends('layouts.admin')

@section('title', 'Edit Staff Member')

@section('content')
<header>
    <div>
        <h1>Edit Staff Member: {{ $member->title }} {{ $member->name }}</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Update details for the staff member below.</p>
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

    <form action="{{ route('admin.staff.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Staff Member Full Name (without Title)</label>
            <input type="text" id="name" name="name" value="{{ old('name', $member->name) }}" required>
        </div>
        <div class="form-group">
            <label for="slug">URL Slug (Unique)</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug', $member->slug) }}" required>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $member->title) }}">
        </div>
        <div class="form-group">
            <label for="role">Role / Position</label>
            <input type="text" id="role" name="role" value="{{ old('role', $member->role) }}" required>
        </div>
        <div class="form-group">
            <label for="image_path">Staff Image URL</label>
            <input type="text" id="image_path" name="image_path" value="{{ old('image_path', $member->image_path) }}" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea id="bio" name="bio" rows="5" required>{{ old('bio', $member->bio) }}</textarea>
        </div>
        <div class="form-group">
            <label for="is_active">Status</label>
            <select id="is_active" name="is_active">
                <option value="1" {{ old('is_active', $member->is_active) == '1' ? 'selected' : '' }}>Active (Show on team lists)</option>
                <option value="0" {{ old('is_active', $member->is_active) == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-primary">Update Staff Member</button>
            <a href="{{ route('admin.staff.index') }}" class="btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
