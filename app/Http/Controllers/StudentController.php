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
    public function index():view{
        $students= Student::latest()->get();
        return view('home',compact('students'));
    }
    //  *Create & Store a new student.
    //  */
    public function store(Request $request):RedirectResponse{
        $validatedData= $request->validate([
            'name'=>['required','string','max:255'],
            'city'=>['required','string','max:255'],
            'marks'=>['required','integer','min:0','max:255']
        ]);
        Student::create($validatedData);

        return redirect()
        ->route('students.index')
        ->with('Success','Student Added Successfully');
    }
 
    /**
     * Open the edit form.
     */
    public function edit(Student $student): view{
    return view('editform',compact('student'));
    }
   
    /**
     * Update a student.
     */
    public function update(
        Request $request,
        Student $student
        ): RedirectResponse{
            $validatedData = $request->validate([
                'name'=>['required','string','max:255'],
                'city'=>['required','string','max:255'],
                'marks'=>['required','integer','min:0','max:255']
            ]);
            $student->update($validatedData);
            return redirect()
            ->route('students.index')
            ->with('Success','Student Updated Successfully');
        }

    /**
     * Delete a student.
     */
    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();

        return redirect()
        ->route('students.index')
        ->with('Success','Student Deleted Successfully');
    
    }
}