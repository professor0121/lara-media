@extends('layouts.admin')

@section('title', 'Add Blog Post')

@section('content')
<header>
    <div>
        <h1>Add New Blog Post</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Publish a new article to the health blog.</p>
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

    <form action="{{ route('admin.blogs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Article Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="e.g. Navigating Seasonal Allergies" required>
        </div>
        <div class="form-group">
            <label for="slug">URL Slug (Unique)</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug') }}" placeholder="e.g. navigating-seasonal-allergies (leave blank to auto-generate)">
        </div>
        <div class="form-group">
            <label for="summary">Summary / Excerpt</label>
            <input type="text" id="summary" name="summary" value="{{ old('summary') }}" placeholder="Short summary displayed on list pages..." required>
        </div>
        <div class="form-group">
            <label for="image_path">Cover Image URL</label>
            <input type="text" id="image_path" name="image_path" value="{{ old('image_path', 'https://cdn.prod.website-files.com/650ab1019fb45c5ceb55d927/650ab4d5861b944ecf7ac1ae_650a867a37d9816c7cc189e4_image%2520(5).png') }}" placeholder="Cover image url path" required>
        </div>
        <div class="form-group">
            <label for="tags">Associated Tags</label>
            <select id="tags" name="tags[]" multiple style="height: 120px;">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" {{ is_array(old('tags')) && in_array($tag->id, old('tags')) ? 'selected' : '' }}>{{ $tag->name }}</option>
                @endforeach
            </select>
            <span style="font-size: 12px; color: var(--text-muted); margin-top: 4px;">Hold Ctrl (Windows) or Cmd (Mac) to select multiple tags.</span>
        </div>
        <div class="form-group">
            <label for="content">Article Content</label>
            <textarea id="content" name="content" rows="10" placeholder="Write full article description here..." required>{{ old('content') }}</textarea>
        </div>
        <div class="form-group">
            <label for="published_at">Publish Date</label>
            <input type="date" id="published_at" name="published_at" value="{{ old('published_at', date('Y-m-d')) }}" required>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-primary">Publish Post</button>
            <a href="{{ route('admin.blogs.index') }}" class="btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
