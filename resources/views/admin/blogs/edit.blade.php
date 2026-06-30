@extends('layouts.admin')

@section('title', 'Edit Blog Post')

@section('content')
<header>
    <div>
        <h1>Edit Blog Post: {{ $post->title }}</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Update details for the blog post below.</p>
    </div>
    <a href="{{ route('admin.blogs.index') }}" class="btn-secondary">Back to List</a>
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

    <form action="{{ route('admin.blogs.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Article Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>
        </div>
        <div class="form-group">
            <label for="slug">URL Slug (Unique)</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" required>
        </div>
        <div class="form-group">
            <label for="summary">Summary / Excerpt</label>
            <input type="text" id="summary" name="summary" value="{{ old('summary', $post->summary) }}" required>
        </div>
        <div class="form-group">
            <label for="image_path">Cover Image URL</label>
            <input type="text" id="image_path" name="image_path" value="{{ old('image_path', $post->image_path) }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select id="category_id" name="category_id">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tags">Associated Tags</label>
            <select id="tags" name="tags[]" multiple style="height: 120px;">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags', $post->tags->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $tag->name }}</option>
                @endforeach
            </select>
            <span style="font-size: 12px; color: var(--text-muted); margin-top: 4px;">Hold Ctrl (Windows) or Cmd (Mac) to select multiple tags.</span>
        </div>
        <div class="form-group">
            <label for="content">Article Content</label>
            <textarea id="content" name="content" rows="10" required>{{ old('content', $post->content) }}</textarea>
        </div>
        <div class="form-group">
            <label for="published_at">Publish Date</label>
            <input type="date" id="published_at" name="published_at" value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d') : '') }}" required>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-primary">Update Post</button>
            <a href="{{ route('admin.blogs.index') }}" class="btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
