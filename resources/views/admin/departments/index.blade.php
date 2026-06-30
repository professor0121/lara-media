@extends('layouts.admin')

@section('title', 'Manage Departments')

@section('content')
<header>
    <div>
        <h1>Departments</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Create and manage clinic departments.</p>
    </div>
    <a href="{{ route('admin.departments.create') }}" class="btn-primary">+ Add New Department</a>
</header>

<div class="card-table">
    <div class="table-header">All Departments</div>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>Icon</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($departments as $dept)
                <tr>
                    <td style="font-size: 20px;">{{ $dept->icon }}</td>
                    <td><strong>{{ $dept->name }}</strong></td>
                    <td><code>{{ $dept->slug }}</code></td>
                    <td>{{ Str::limit($dept->description, 80) }}</td>
                    <td>
                        @if($dept->is_active)
                            <span class="badge badge-active">Active</span>
                        @else
                            <span class="badge badge-inactive">Inactive</span>
                        @endif
                    </td>
                    <td class="action-links">
                        <a href="{{ route('admin.departments.edit', $dept->id) }}" class="link-edit">Edit</a>
                        <form action="{{ route('admin.departments.destroy', $dept->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this department? All associated doctors will need to be reallocated.');" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="link-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; color: var(--text-muted); padding: 32px;">
                        No departments found. Click "+ Add New Department" to create one.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
