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
        //
        $student = Student::all();
        
        // dd($student_arr);
        return view('students/index',compact('student'))
        ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addPage()
    {
        //
        return view('students/addStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'nis' => 'required',
            'name' => 'required',
            'class_room' => 'required',
        ]);

        Student::create($request->all());
        return redirect('/students');

    }

    /**
     * Display the specified resource.
     */
    public function editPage($id)
    {
        //
        $student = Student::find($id);
        return view('students/editStudent',compact('student'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    public function update(Request $request, $id)
    {
        //
        request()->validate([
            'nis' => 'required',
            'name' => 'required',
            'class_room' => 'required',
        ]);

        $student = Student::find($id);
        $student->update($request->all());
        return redirect('/students');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student ->delete();
        return redirect('/students');
    }

    public function detail()
    {
        return view('students/detailStudent');
        
    }


    
}
