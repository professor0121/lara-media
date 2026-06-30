<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('department')->get();

        return view('admin.doctors.index', compact('doctors'));
    }

    public function create()
    {
        $departments = Department::all();

        return view('admin.doctors.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:doctors,slug',
            'title' => 'required|string|max:50',
            'specialty' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'image_path' => 'required|string|max:255',
            'bio' => 'required|string',
        ]);

        $slug = $request->slug ? Str::slug($request->slug) : Str::slug($request->name);

        Doctor::create([
            'name' => $request->name,
            'slug' => $slug,
            'title' => $request->title,
            'specialty' => $request->specialty,
            'department_id' => $request->department_id,
            'image_path' => $request->image_path,
            'bio' => $request->bio,
        ]);

        return redirect()->route('admin.doctors.index')->with('success', 'Doctor registered successfully!');
    }

    public function edit(Doctor $doctor)
    {
        $departments = Department::all();

        return view('admin.doctors.edit', compact('doctor', 'departments'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:doctors,slug,'.$doctor->id,
            'title' => 'required|string|max:50',
            'specialty' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'image_path' => 'required|string|max:255',
            'bio' => 'required|string',
        ]);

        $doctor->update([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'title' => $request->title,
            'specialty' => $request->specialty,
            'department_id' => $request->department_id,
            'image_path' => $request->image_path,
            'bio' => $request->bio,
        ]);

        return redirect()->route('admin.doctors.index')->with('success', 'Doctor details updated successfully!');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('admin.doctors.index')->with('success', 'Doctor deleted successfully!');
    }
}
