<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class SchoolController extends Controller {
    
    public function index() {

         $students = Student::with("course")->get();

        return view("list_student", [
            "students" =>  $students
        ]);
    }
    
    public function newStudent() {
        return view("new_student");
    }

    public function storeStudent(Request $request) {
        
        $course = $request->course;
        $courses = Course::where("name", "Java",)->get();
        $course_id = 0;
        foreach($courses as $course) {
            $course_id = $course->id;

        $student = new Student;
    }

        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->course_id = $course_id;

        $student->save();

        $request->session()->flash("success" ,"Successful save");
        return redirect("/");
    }

    public function showStudent(Request $request) {
        $name = $request->name;
        $students = Student::with("course")->where("name", $name)->get();

        return view("list_student", [
            "students" =>  $students
        ]);
    }

    public function showUpdateStudent(Request $request) {
        $name = $request->name;
        $students = Student::with("course")->where("name", $name)->get();

        return view("update_student", [
            "students" =>  $students
        ]);
    }

    public function updateStudent(Request $request) {
       
        echo "<pre>";
        print_r($request);
        $course = $request->course;
        $courses = Course::where("name", "Java",)->get();
        $course_id = 0;
        foreach($courses as $course) {
            $course_id = $course->id;

        $student = Student::where("name", $request->name)->first;

        $student->name = $request->name;
        $student->email = $request->email;
        $student->course_id = $request->course_id;
        $student->save();

        return redirect("/");
    }
    
    }

}
