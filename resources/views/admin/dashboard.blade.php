@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <header>
        <div>
            <h1>Dashboard</h1>
            <p style="color: var(--text-muted); margin-top: 4px;">Welcome back, Administrator.</p>
        </div>
        <a href="{{ route('home') }}" target="_blank" class="btn-secondary">View Live Website</a>
    </header>

    <div class="grid-stats">
        <div class="card-stat">
            <span class="stat-value">{{ $counts['departments'] }}</span>
            <span class="stat-label">Departments</span>
        </div>
        <div class="card-stat">
            <span class="stat-value">{{ $counts['doctors'] }}</span>
            <span class="stat-label">Doctors</span>
        </div>
        <div class="card-stat">
            <span class="stat-value">{{ $counts['staff'] }}</span>
            <span class="stat-label">Staff Members</span>
        </div>
        <div class="card-stat">
            <span class="stat-value">{{ $counts['blogs'] }}</span>
            <span class="stat-label">Blog Posts</span>
        </div>
        <div class="card-stat">
            <span class="stat-value">{{ $counts['appointments'] }}</span>
            <span class="stat-label">Appointments</span>
        </div>
    </div>

    <div class="card-table">
        <div class="table-header">
            Recent Appointment Bookings
        </div>
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
                    @forelse($recentAppointments as $app)
                        <tr>
                            <td><strong>{{ $app->name }}</strong></td>
                            <td>{{ $app->email }}</td>
                            <td>{{ $app->phone }}</td>
                            <td>{{ $app->preferred_time }}</td>
                            <td>{{ $app->created_at->format('M d, Y h:i A') }}</td>
                            <td class="action-links">
                                <a href="{{ route('admin.appointments.show', $app->id) }}" class="link-edit">View Details</a>
                                <form action="{{ route('admin.appointments.destroy', $app->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this appointment booking?');"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="link-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="text-align: center; color: var(--text-muted); padding: 32px;">
                                No recent appointments found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection