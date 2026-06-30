@extends('layouts.admin')

@section('title', 'Appointment Details')

@section('content')
<header>
    <div>
        <h1>Appointment Booking Details</h1>
        <p style="color: var(--text-muted); margin-top: 4px;">Submitted by {{ $appointment->name }} on {{ $appointment->created_at->format('F d, Y \a\t h:i A') }}</p>
    </div>
    <a href="{{ route('admin.appointments.index') }}" class="btn-secondary">Back to List</a>
</header>

<div class="card-form" style="max-width: 700px; display: flex; flex-direction: column; gap: 24px;">
    <div style="display: grid; grid-template-columns: 150px 1fr; gap: 16px; border-bottom: 1px solid var(--border-color); padding-bottom: 16px;">
        <span style="font-weight: 600; color: var(--text-muted);">Patient Name:</span>
        <span style="font-size: 18px; font-weight: 700;">{{ $appointment->name }}</span>
    </div>
    <div style="display: grid; grid-template-columns: 150px 1fr; gap: 16px; border-bottom: 1px solid var(--border-color); padding-bottom: 16px;">
        <span style="font-weight: 600; color: var(--text-muted);">Email Address:</span>
        <span><a href="mailto:{{ $appointment->email }}" style="color: var(--primary); text-decoration: none;">{{ $appointment->email }}</a></span>
    </div>
    <div style="display: grid; grid-template-columns: 150px 1fr; gap: 16px; border-bottom: 1px solid var(--border-color); padding-bottom: 16px;">
        <span style="font-weight: 600; color: var(--text-muted);">Phone Number:</span>
        <span><a href="tel:{{ $appointment->phone }}" style="color: var(--primary); text-decoration: none;">{{ $appointment->phone }}</a></span>
    </div>
    <div style="display: grid; grid-template-columns: 150px 1fr; gap: 16px; border-bottom: 1px solid var(--border-color); padding-bottom: 16px;">
        <span style="font-weight: 600; color: var(--text-muted);">Preferred Schedule:</span>
        <span style="font-weight: 600; color: var(--accent);">{{ $appointment->preferred_time }}</span>
    </div>
    <div style="display: flex; flex-direction: column; gap: 12px; padding-bottom: 16px;">
        <span style="font-weight: 600; color: var(--text-muted);">Message:</span>
        <div style="background-color: var(--bg-color); padding: 20px; border-radius: 8px; border: 1px solid var(--border-color); line-height: 1.6; white-space: pre-wrap;">{{ $appointment->message ?? 'No message provided.' }}</div>
    </div>
    
    <div style="margin-top: 24px; display: flex; gap: 16px;">
        <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment booking?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-logout" style="width: auto; padding: 12px 24px;">Delete Booking</button>
        </form>
        <a href="{{ route('admin.appointments.index') }}" class="btn-secondary">Back to Appointments</a>
    </div>
</div>
@endsection
