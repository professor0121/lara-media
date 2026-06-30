@extends('layouts.admin')

@section('title', 'Edit Tag')

@section('content')
    <header>
        <div>
            <h1>Edit Tag: {{ $tag->name }}</h1>
            <p style="color: var(--text-muted); margin-top: 4px;">Update details for the tag below.</p>
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

        <form action="{{ route('admin.tags.update', $tag->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tag Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $tag->name) }}" required>
            </div>
            <div class="form-group">
                <label for="slug">URL Slug (Unique)</label>
                <input type="text" id="slug" name="slug" value="{{ old('slug', $tag->slug) }}" required>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-primary">Update Tag</button>
                <a href="{{ route('admin.tags.index') }}" class="btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection