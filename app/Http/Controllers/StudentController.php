<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentCertificate;
use App\Models\StudentSubject;
use App\Models\Subject;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $student;
    public function index()
    {
        return view('website.student.index',['subjects' =>Subject::all()]);
    }

    public function create(Request $request)
    {
        $this->student = Student::newStudent($request);
        StudentSubject::newStudentSubject($request, $this->student->id);
        StudentCertificate::newStudentCertificate($request, $this->student->id);
        return redirect()->back()->with('message','Student info save.');
    }

    public function manage()
    {
        return view('website.student.manage',['students' => Student::orderBy('id','desc')->get()]);
    }

    public function detail( $id)
    {

        return view('website.student.detail',['student' => Student::find($id)]);
    }

    public function edit($id)
    {
        return view('website.student.edit',['student'=>Student::find($id),'subjects' =>Subject::all()]);
    }

    public function update(Request $request, $id)
    {
        Student::updateStudent($request, $id);
        return redirect('/student/manage')->with('message','Student info update successfully.');

    }

    public function delete($id)
    {
        Student::deleteStudent($id);
        return redirect()->back()->with('message','Student delete successfully' );
    }


}
