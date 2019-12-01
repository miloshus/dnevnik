<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Section;
use App\Subject;
use App\User;

    class TeacherController extends Controller
    {
        public function section($section_id = null) {
            if ($section_id == null) {
                $section_id = auth()->user()->section->id;
            }
            $students = Student::where('section_id', $section_id)->get();
            return view('teacher.section', compact('students'));
        }

//        public function student(Student $student)
//        {
//            $sections = Section::all();
//            $grades = Grade::where('student_id', $student->id)->get()->groupBy('subject_id');
//            return view('teacher.student', compact('grades', 'student', 'sections'));
//        }

    }
