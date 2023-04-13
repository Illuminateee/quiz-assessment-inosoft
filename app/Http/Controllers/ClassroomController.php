<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $class = Classroom::all();
        return view('classroom/index',compact('class'))
        ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    public function addPage(){
        return view('classroom/addClass');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'class_name' => 'required',
            'student' => 'required'
        ]);

        Classroom::create($request->all());
        return redirect('/classroom');
       
    }

    public function detailPage($id){
        $class = Classroom::find($id);
        $class_arr = json_decode($class);
        return view('classroom/detailClass', compact('class_arr'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function editPage($id){

        $class = Classroom::find($id);
        return view('classroom/editClass',compact('class'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function update(Request $request,$id)
    {
        //
        request()->validate([

            'class_name' => 'required',
        ]);
        $class = Classroom::find($id);
        $class->update($request->all());
        return redirect('/classroom');
    }

    public function destroy($id)
    {
        $class = Classroom::find($id);
        $class ->delete();
        return redirect('/classroom');
    }

    /**
     * Display the specified resource.
     */
  

    /**
     * Show the form for editing the specified resource.
     */
 //

    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    
}
