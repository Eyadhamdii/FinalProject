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
    $photoUrl = $user->photo;

    // Check if the photo URL exists
    if ($photoUrl) {
        // Display the photo using an <img> tag
        return view('profile.index', compact('user', 'photoUrl'));
    } else {
        return view('profile.index', compact('user'));
    }
}

public function contact()
{
    $user = Auth::user();

    return view('contact.contact');  
}
public function addcourse()
{
    $user = Auth::user();

    return view('admin.addcourse');  
}

public function complain()
{
    $user = Auth::user();

    return view('admin.complain',['name' => $user->name ,'role' => $user->role]);  
}
}
