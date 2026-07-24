<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{

    // In StudentController.php
    public function index()
    {
        $students = Student::latest()->get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    // Store student
    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|max:100',
            'sex' => 'required|in:Male,Female',
            'date_of_birth' => 'required|date',
            'address' => 'required|max:255',
            'phone' => 'required|max:20',
            'image' => [
                'nullable',
                'image',
                'mimetypes:image/jpeg,image/png,image/gif,image/webp,image/bmp,image/svg+xml,image/avif',
                'max:10240',
            ],
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('students', 'public');
        }

        Student::create([
            'student_name' => $request->student_name,
            'sex' => $request->sex,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'phone' => $request->phone,
            'image' => $image,
        ]);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // Show edit form
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Update student
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'student_name' => 'required|max:100',
            'sex' => 'required|in:Male,Female',
            'date_of_birth' => 'required|date',
            'address' => 'required|max:255',
            'phone' => 'required|max:20',
            'image' => [
                'nullable',
                'image',
                'mimetypes:image/jpeg,image/png,image/gif,image/webp,image/bmp,image/svg+xml,image/avif',
                'max:10240',
            ],
        ]);

        $image = $student->image;

        if ($request->hasFile('image')) {

            // លុបរូបភាពចាស់
            if ($student->image && Storage::disk('public')->exists($student->image)) {
                Storage::disk('public')->delete($student->image);
            }

            // Upload រូបថ្មី
            $image = $request->file('image')->store('students', 'public');
        }

        $student->update([
            'student_name'  => $request->student_name,
            'sex'           => $request->sex,
            'date_of_birth' => $request->date_of_birth,
            'address'       => $request->address,
            'phone'         => $request->phone,
            'image'         => $image,
        ]);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student updated successfully.');
    }

    // Delete student
    public function destroy(Student $student)
    {
        if ($student->image && Storage::disk('public')->exists($student->image)) {
            Storage::disk('public')->delete($student->image);
        }

        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully.');
    }
}
