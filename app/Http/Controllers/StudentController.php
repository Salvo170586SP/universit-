<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $students = Student::with('course')->get();

        return view('students.index', compact('students', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();

        return view('students.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required',
            
        ]);

        $data = $request->all();
        $new_student = Student::create($data);

        /* $new_student = new Student();
         $student->name = $request->name;
        $student->surname = $request->surname;
        $student->age = $request->age;
        $student->course_id = $request->course_id; */

        $new_student->save();

        return redirect()->route('students.index')->with('success', 'Lo studente è stato aggiunto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);

        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $courses = Course::all();
        return view('students.edit', compact('student', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //dd($request);
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required',
        ]);

       /*  $student = Student::findOrFail($id);

        $student->fill($request->all());

        $student->save(); */
        $data = $request->all();
        $student->update($data);

        return redirect()->route('students.index')->with('seccess', 'Lo studente è stato aggiornato');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index');
    }

    public function getCourse($id)
    {


        $courses = Course::all();
        $students = Student::where('course_id', '=', $id)->get();

        return view('students.index', compact('students', 'courses'));
    }
}
