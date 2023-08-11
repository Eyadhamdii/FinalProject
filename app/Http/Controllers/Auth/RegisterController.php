<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    use RegistersUsers;

    public const PROFESSOR_HOME = '/home.professor';
    protected $redirectTo;
    protected $photoPath; // Declare the $photoPath variable at the class level

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {   
             $this->photoPath = null; // Initialize the $photoPath variable

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'UniId' => ['required', 'string'],
            'gender' => ['required', 'in:male,female'],
            'photo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);
    }

    protected function create(array $data)
    {
        try {
            if (isset($data['photo']) && $data['photo']->isValid()) {
                $originalName = $data['photo']->getClientOriginalName();
                $this->photoPath = $data['photo']->storeAs('photos', $originalName, 'public');
            }
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the file upload
            // You can add custom error handling logic here
        }
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'UniId' => $data['UniId'],
            'NationalId' => $data['NationalId'],
            'Mobile' => $data['Mobile'],
            'gender' => $data['gender'],
            'role' => $data['role'],
            'photo' => $this->photoPath, // Access the $photoPath variable from the class
        ]);

        $role = $data['role'];

        if ($role === 'Doctor') {
            $this->redirectTo = 'home\professor';
        } else {
            $this->redirectTo = RouteServiceProvider::HOME;
        }

        return $user;
    }
}
