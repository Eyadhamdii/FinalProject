<?php

namespace App\Http\Controllers;

use App\Models\RecognizedName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RecognitionController extends Controller
{
    // public function saveName(Request $request)
    // {
    //     // Retrieve the recognized name from the request
    //     $name = $request->input('name');

    //     // Create a new instance of the RecognizedName model
    //     $recognizedName = new RecognizedName();

    //     // Set the name value
    //     $recognizedName->name = $name;

    //     Log::debug('Before save');

    //     // Save the record in the database
    //     $saveResult = $recognizedName->save();

    //     if ($saveResult) {
    //         Log::debug('Name saved successfully');
    //         return response()->json(['message' => 'Name saved successfully']);
    //     } else {
    //         Log::error('Failed to save name');
    //         return response()->json(['message' => 'Failed to save name'], 500);
    //     }
    // }


    public function store(Request $request)
    {
        // Retrieve data from the request
        $name = $request->input('name');
        $day = $request->input('day');
        
        // Perform database operations
        // For example, save the data to the database
        $record = new RecognizedName;
        $record->name = $name;
        $record->day = $day;
        $record->save();
        
        
        // Return a response
        return response()->json(['message' => 'Data stored successfully']);
    }
}

