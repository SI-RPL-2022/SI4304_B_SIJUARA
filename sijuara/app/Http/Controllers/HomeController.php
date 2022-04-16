<?php

namespace App\Http\Controllers;
use App\Orantua;
use App\Siswa;
use App\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        
        if ($user->hasRole('Admin')) {

            $parents = Orangtua::latest()->get();
            $teachers = Guru::latest()->get();
            $students = Siswa::latest()->get();

            return view('home', compact('orangtua','guru','siswa'));

        } else {
            return 'NO ROLE ASSIGNED YET!';
        }
        
    }
}
