@extends('layouts.admin')

@section('title', 'Manage Doctors')

@section('content')
<header>
    <div>
        <h1>Doctors</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Create and manage hospital doctors and specialists.</p>
    </div>
    <a href="{{ route('admin.doctors.create') }}" class="btn-primary">+ Add New Doctor</a>
</header>

<div class="card-table">
    <div class="table-header">All Doctors</div>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Specialty</th>
                    <th>Department</th>
                    <th>Bio</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($doctors as $doc)
                <tr>
                    <td>
                        @if($doc->image_path)
                            <img src="{{ $doc->image_path }}" alt="{{ $doc->name }}" style="width: 44px; height: 44px; border-radius: 50%; object-fit: cover; border: 1px solid var(--border-color);">
                        @else
                            <div style="width: 44px; height: 44px; border-radius: 50%; background-color: var(--bg-color); display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 600; border: 1px solid var(--border-color);">N/A</div>
                        @endif
                    </td>
                    <td><strong>{{ $doc->title }} {{ $doc->name }}</strong></td>
                    <td>{{ $doc->specialty }}</td>
                    <td>
                        @if($doc->department)
                            <span class="badge badge-active">{{ $doc->department->name }}</span>
                        @else
                            <span class="badge badge-inactive">None</span>
                        @endif
                    </td>
                    <td>{{ Str::limit($doc->bio, 80) }}</td>
                    <td class="action-links">
                        <a href="{{ route('admin.doctors.edit', $doc->id) }}" class="link-edit">Edit</a>
                        <form action="{{ route('admin.doctors.destroy', $doc->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this doctor?');" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="link-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; color: var(--text-muted); padding: 32px;">
                        No doctors found. Click "+ Add New Doctor" to register one.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
