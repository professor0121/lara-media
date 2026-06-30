@extends('layouts.admin')

@section('title', 'Manage Appointments')

@section('content')
<header>
    <div>
        <h1>Appointments</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Review and manage patient booked appointments.</p>
    </div>
</header>

<div class="card-table">
    <div class="table-header">All Bookings</div>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Preferred Schedule</th>
                    <th>Booked At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($appointments as $app)
                <tr>
                    <td><strong>{{ $app->name }}</strong></td>
                    <td>{{ $app->email }}</td>
                    <td>{{ $app->phone }}</td>
                    <td>{{ $app->preferred_time }}</td>
                    <td>{{ $app->created_at->format('M d, Y h:i A') }}</td>
                    <td class="action-links">
                        <a href="{{ route('admin.appointments.show', $app->id) }}" class="link-edit">View Details</a>
                        <form action="{{ route('admin.appointments.destroy', $app->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment booking?');" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="link-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; color: var(--text-muted); padding: 32px;">
                        No booked appointments found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
