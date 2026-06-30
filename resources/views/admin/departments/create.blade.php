@extends('layouts.admin')

@section('title', 'Add Department')

@section('content')
<header>
    <div>
        <h1>Add New Department</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Fill out the form below to create a new department.</p>
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

    <form action="{{ route('admin.departments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Department Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="e.g. Cardiology" required>
        </div>
        <div class="form-group">
            <label for="slug">URL Slug (Unique)</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug') }}" placeholder="e.g. cardiology (leave blank to auto-generate)">
        </div>
        <div class="form-group">
            <label for="icon">Icon character (Webflow specific glyph)</label>
            <input type="text" id="icon" name="icon" value="{{ old('icon', '') }}" placeholder="e.g. " required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5" placeholder="Provide a brief description of the department's medical activities..." required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="is_active">Status</label>
            <select id="is_active" name="is_active">
                <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>Active (Show on Navbar and site)</option>
                <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-primary">Save Department</button>
            <a href="{{ route('admin.departments.index') }}" class="btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
