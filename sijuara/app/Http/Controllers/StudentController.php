<?php

namespace App\Http\Controllers;

use App\User;
use App\Grade;
use App\Parents;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('class')->latest()->paginate(10);

        return view('backend.students.index', compact('students'));
    }
}
