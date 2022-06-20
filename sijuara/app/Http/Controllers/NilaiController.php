<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Teacher;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        return view('backend.nilai.index');
    }

    public function create()
    {
        $teachers = Teacher::latest()->get();

        return view('backend.nilai.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255|unique:nilai',
            'uh'            => 'required|numeric',
            'uts'           => 'required|numeric',
            'uas'           => 'required|numeric'
        ]);

        Nilai::create([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name),
            'uh'            => $request->uh,
            'uts'           => $request->uts,
            'uas'           => $request->uas
        ]);

        return redirect()->route('nilai.index');
    }

}