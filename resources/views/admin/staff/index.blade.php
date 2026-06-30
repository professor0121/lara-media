@extends('layouts.admin')

@section('title', 'Manage Staff')

@section('content')
<header>
    <div>
        <h1>Staff Members</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Create and manage hospital nursing, lab, and support staff.</p>
    </div>
    <a href="{{ route('admin.staff.create') }}" class="btn-primary">+ Add New Staff Member</a>
</header>

<div class="card-table">
    <div class="table-header">All Staff Members</div>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Bio</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($staff as $member)
                <tr>
                    <td>
                        @if($member->image_path)
                            <img src="{{ $member->image_path }}" alt="{{ $member->name }}" style="width: 44px; height: 44px; border-radius: 50%; object-fit: cover; border: 1px solid var(--border-color);">
                        @else
                            <div style="width: 44px; height: 44px; border-radius: 50%; background-color: var(--bg-color); display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 600; border: 1px solid var(--border-color);">N/A</div>
                        @endif
                    </td>
                    <td><strong>{{ $member->title }} {{ $member->name }}</strong></td>
                    <td>{{ $member->role }}</td>
                    <td>{{ Str::limit($member->bio, 80) }}</td>
                    <td>
                        @if($member->is_active)
                            <span class="badge badge-active">Active</span>
                        @else
                            <span class="badge badge-inactive">Inactive</span>
                        @endif
                    </td>
                    <td class="action-links">
                        <a href="{{ route('admin.staff.edit', $member->id) }}" class="link-edit">Edit</a>
                        <form action="{{ route('admin.staff.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this staff member?');" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="link-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; color: var(--text-muted); padding: 32px;">
                        No staff members found. Click "+ Add New Staff Member" to create one.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
