<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display all students.
     */
    public function index(): View
    {
        $students = Student::latest()->get();

        return view('home', compact('students'));
    }

    /**
     * Store a new student.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'marks' => ['required', 'integer', 'min:0', 'max:100'],
        ]);

        Student::create($validatedData);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student added successfully.');
    }

    /**
     * Open the edit form.
     */
    public function edit(Student $student): View
    {
        return view('editform', compact('student'));
    }

    /**
     * Update a student.
     */
    public function update(
        Request $request,
        Student $student
    ): RedirectResponse {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'marks' => ['required', 'integer', 'min:0', 'max:100'],
        ]);

        $student->update($validatedData);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student updated successfully.');
    }

    /**
     * Delete a student.
     */
    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student deleted successfully.');
    }
}