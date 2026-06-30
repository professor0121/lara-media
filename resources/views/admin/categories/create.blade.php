@extends('layouts.admin')

@section('title', 'Add Category')

@section('content')
    <header>
        <div>
            <h1>Add New Category</h1>
            <p style="color: var(--text-muted); margin-top: 4px;">Create a new category for categorizing blogs.</p>
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

        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="e.g. Surgery"
                    required>
            </div>
            <div class="form-group">
                <label for="slug">URL Slug (Unique)</label>
                <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
                    placeholder="e.g. surgery (leave blank to auto-generate)">
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-primary">Save Category</button>
                <a href="{{ route('admin.categories.index') }}" class="btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
