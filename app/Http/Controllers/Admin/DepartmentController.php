<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        return view('admin.departments.index', compact('departments'));
    }

    public function create()
    {
        return view('admin.departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:departments,slug',
            'icon' => 'required|string|max:10',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);

        $slug = $request->slug ? Str::slug($request->slug) : Str::slug($request->name);

        Department::create([
            'name' => $request->name,
            'slug' => $slug,
            'icon' => $request->icon,
            'description' => $request->description,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.departments.index')->with('success', 'Department created successfully!');
    }

    public function edit(Department $department)
    {
        return view('admin.departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:departments,slug,'.$department->id,
            'icon' => 'required|string|max:10',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);

        $department->update([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'icon' => $request->icon,
            'description' => $request->description,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.departments.index')->with('success', 'Department updated successfully!');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('admin.departments.index')->with('success', 'Department deleted successfully!');
    }
}
