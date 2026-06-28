<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('home', [
            'students' => $students
        ]);
    }
    public function showData()
    {
        $students = Student::all();

        return view('formview', [
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->city = $request->city;
        $student->marks = $request->marks;
        $student->email = $request->email;
        $student->save();
        return redirect('formview')
            ->with('success', 'Student Added Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('edit', [
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->city = $request->city;
        $student->marks = $request->marks;
        $student->email = $request->email;
        $student->save();
        return redirect('formview')
            ->with('success', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('formview')
            ->with('success', 'Student Deleted Successfully');
    }
}
