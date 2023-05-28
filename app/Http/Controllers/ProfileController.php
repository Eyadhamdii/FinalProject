<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
{
    return view('profile.index', compact('user'));
}
public function index()
{
    $user = Auth::user();

    return view('profile.index', compact('user'));  
}
}
