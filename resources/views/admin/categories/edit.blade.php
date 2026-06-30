@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
    <header>
        <div>
            <h1>Edit Category: {{ $category->name }}</h1>
            <p style="color: var(--text-muted); margin-top: 4px;">Update details for the category below.</p>
        </div>
        <a href="{{ route('admin.categories.index') }}" class="btn-secondary">Back to List</a>
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

        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required>
            </div>
            <div class="form-group">
                <label for="slug">URL Slug (Unique)</label>
                <input type="text" id="slug" name="slug" value="{{ old('slug', $category->slug) }}" required>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-primary">Update Category</button>
                <a href="{{ route('admin.categories.index') }}" class="btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
