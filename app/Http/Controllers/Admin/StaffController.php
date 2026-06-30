<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::all();

        return view('admin.staff.index', compact('staff'));
    }

    public function create()
    {
        return view('admin.staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:staff,slug',
            'title' => 'nullable|string|max:50',
            'role' => 'required|string|max:255',
            'image_path' => 'required|string|max:255',
            'bio' => 'required|string',
            'is_active' => 'required|boolean',
        ]);

        $slug = $request->slug ? Str::slug($request->slug) : Str::slug($request->name);

        Staff::create([
            'name' => $request->name,
            'slug' => $slug,
            'title' => $request->title,
            'role' => $request->role,
            'image_path' => $request->image_path,
            'bio' => $request->bio,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.staff.index')->with('success', 'Staff member registered successfully!');
    }

    public function edit(Staff $staff)
    {
        // Parameter name matching is automatic if model binding is set. But in Laravel, if model name is Staff, then $staff should match.
        // Let's use $staff directly. Wait, the route parameter is 'staff', so the variable must be $staff.
        $member = $staff;

        return view('admin.staff.edit', compact('member'));
    }

    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:staff,slug,'.$staff->id,
            'title' => 'nullable|string|max:50',
            'role' => 'required|string|max:255',
            'image_path' => 'required|string|max:255',
            'bio' => 'required|string',
            'is_active' => 'required|boolean',
        ]);

        $staff->update([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'title' => $request->title,
            'role' => $request->role,
            'image_path' => $request->image_path,
            'bio' => $request->bio,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.staff.index')->with('success', 'Staff member details updated successfully!');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('admin.staff.index')->with('success', 'Staff member deleted successfully!');
    }
}
