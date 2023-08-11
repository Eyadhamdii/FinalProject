<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        // $user = Auth::user(); // Get the currently authenticated user
        // $validatedData['user_id'] = $user->UniId; // Set the user_id foreign key
        $form = Form::create($validatedData);
        return redirect()->back()->with('success', 'Form submitted successfully!');

        // Optionally, you can redirect or return a response here
    }
}

