<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $redirectTo;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $role = $user->role;

        if ($role === 'Doctor') {
            return view('home.professor', ['name' => $user->name ,'role' => $user->role]);  
        } else {
            return view('home.index', ['name' => $user->name ,'role' => $user->role]);  
        }
    }
}
