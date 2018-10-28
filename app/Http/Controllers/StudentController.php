<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\students;


class StudentController extends Controller
{
    /**
     * Display a listing of the Students.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view ('students.index');
        $students = students::all();
        return view ('students/index', compact('students'));
    }

    /**
     * Show the form for creating a new Student.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('students.create');
    }

    /**
     * Store a newly created Student in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        students::create([

            'name'=> $request->name,
            'mobile'=> $request->mobile

        ]);
        
       return redirect()->route('students.index');

    }

    /**
     * Display the specified Student info.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find the student or fail
        $student = students::findorfail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified Student.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the student or fail
        $student = students::findorfail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified Student info in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = students::findorfail($id);
        $student ->update([
                'name' => $request->name,
                'mobile' => $request->mobile
        ]);

        // return redirect()->back();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified Student from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ////find the student or fail
         $student = students::findorfail($id);
         $student ->delete();
         return redirect()-> route('students.index');
    }
}
