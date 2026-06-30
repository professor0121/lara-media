@extends('layouts.admin')

@section('title', 'Add Tag')

@section('content')
    <header>
        <div>
            <h1>Add New Tag</h1>
            <p style="color: var(--text-muted); margin-top: 4px;">Create a new tag for categorizing blogs.</p>
        </div>
        <a href="{{ route('admin.tags.index') }}" class="btn-secondary">Back to List</a>
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

        <form action="{{ route('admin.tags.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tag Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="e.g. Life Style" required>
            </div>
            <div class="form-group">
                <label for="slug">URL Slug (Unique)</label>
                <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
                    placeholder="e.g. life-style (leave blank to auto-generate)">
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-primary">Save Tag</button>
                <a href="{{ route('admin.tags.index') }}" class="btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection