@extends('layouts.admin')

@section('title', 'Manage Blog Posts')

@section('content')
<header>
    <div>
        <h1>Blog Posts</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Create and manage hospital blogs and health updates.</p>
    </div>
    <a href="{{ route('admin.blogs.create') }}" class="btn-primary">+ Add New Blog Post</a>
</header>

<div class="card-table">
    <div class="table-header">All Blog Posts</div>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Tags</th>
                    <th>Published At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <td>
                        @if($post->image_path)
                            <img src="{{ $post->image_path }}" alt="{{ $post->title }}" style="width: 56px; height: 38px; border-radius: 4px; object-fit: cover; border: 1px solid var(--border-color);">
                        @else
                            <div style="width: 56px; height: 38px; border-radius: 4px; background-color: var(--bg-color); display: flex; align-items: center; justify-content: center; font-size: 11px; font-weight: 600; border: 1px solid var(--border-color);">N/A</div>
                        @endif
                    </td>
                    <td><strong>{{ $post->title }}</strong></td>
                    <td><code>{{ $post->slug }}</code></td>
                    <td>
                        @foreach($post->tags as $tag)
                            <span class="badge badge-active" style="margin-right: 4px; margin-bottom: 4px; font-size: 10px;">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td>{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Draft' }}</td>
                    <td class="action-links">
                        <a href="{{ route('admin.blogs.edit', $post->id) }}" class="link-edit">Edit</a>
                        <form action="{{ route('admin.blogs.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog post?');" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="link-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; color: var(--text-muted); padding: 32px;">
                        No blog posts found. Click "+ Add New Blog Post" to publish one.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
