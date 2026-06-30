<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\BlogPost;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login()
    {
        if (session()->has('admin_user_id')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session(['admin_user_id' => $user->id]);

            return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully!');
        }

        return back()->with('error', 'Invalid email address or password. Please try again.')->withInput($request->only('email'));
    }

    public function dashboard()
    {
        $counts = [
            'departments' => Department::count(),
            'doctors' => Doctor::count(),
            'staff' => Staff::count(),
            'blogs' => BlogPost::count(),
            'appointments' => Appointment::count(),
        ];

        $recentAppointments = Appointment::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact('counts', 'recentAppointments'));
    }

    public function logout()
    {
        session()->forget('admin_user_id');

        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }
}
