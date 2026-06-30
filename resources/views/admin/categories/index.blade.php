@extends('layouts.admin')

@section('title', 'Manage Categories')

@section('content')
    <header>
        <div>
            <h1>Categories</h1>
            <p style="color: var(--text-muted); margin-top: 4px;">Create and manage categories for blog posts.</p>
        </div>
        <a href="{{ route('admin.categories.create') }}" class="btn-primary">+ Add New Category</a>
    </header>

    <div class="card-table">
        <div class="table-header">All Categories</div>
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
                    @forelse($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td><strong>{{ $category->name }}</strong></td>
                            <td><code>{{ $category->slug }}</code></td>
                            <td>{{ $category->blog_posts_count ?? $category->blogPosts()->count() }} posts</td>
                            <td class="action-links">
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="link-edit">Edit</a>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this category?');"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="link-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="text-align: center; color: var(--text-muted); padding: 32px;">
                                No categories found. Click "+ Add New Category" to create one.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
