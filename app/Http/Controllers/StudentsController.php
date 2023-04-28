<?php

namespace App\Http\Controllers;
use App\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Students::all();
        //dd($students);
        return view('index', compact('students','students'));
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        Students::create([
            'name' => $request->name,
            'phone' =>$request->phone,
            'address' =>$request->address,
        ]);
        return redirect()->route('student.index')->with('success', 'Books has been added');
    }

    public function edit(Students $student)
    {
        return view('edit')->with('student',$student);
    }




    public function update(Request $request, Students $student)
    {
        $student->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            
        ]);
        return redirect()->route('student.index')->with('success', 'Books has been Updated');
    }

    public function destroy(Students $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Books has been Deleted');
    }


}
