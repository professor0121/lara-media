<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(StoreAppointmentRequest $request)
    {
        $validated = $request->validated();

        $appointment = Appointment::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['Phone-Number-2'],
            'preferred_time' => $validated['Schedule-2'],
            'message' => $validated['Message-2'] ?? null,
        ]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your appointment has been booked successfully.',
                'appointment' => $appointment,
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your appointment has been booked successfully.');
    }
}
