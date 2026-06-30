@extends('layouts.admin')

@section('title', 'Manage Tags')

@section('content')
<header>
    <div>
        <h1>Tags</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Create and manage tags for blog posts.</p>
    </div>
    <a href="{{ route('admin.tags.create') }}" class="btn-primary">+ Add New Tag</a>
</header>

<div class="card-table">
    <div class="table-header">All Tags</div>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Associated Blog Posts</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td><strong>{{ $tag->name }}</strong></td>
                    <td><code>{{ $tag->slug }}</code></td>
                    <td>{{ $tag->blog_posts_count ?? $tag->blogPosts()->count() }} posts</td>
                    <td class="action-links">
                        <a href="{{ route('admin.tags.edit', $tag->id) }}" class="link-edit">Edit</a>
                        <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this tag?');" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="link-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" style="text-align: center; color: var(--text-muted); padding: 32px;">
                        No tags found. Click "+ Add New Tag" to create one.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
