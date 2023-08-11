<?php

namespace App\Http\Controllers;

use App\Models\RecognizedName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class FaceRecognitionController extends Controller
{
    public function recognize()
    {
        set_time_limit(120); // Set the timeout to 120 seconds (2 minutes)
        $virtualEnvPath = 'scripts/myenv'; // Replace with the path to your virtual environment
        
        // Execute the Python script using the virtual environment's Python interpreter
        $scriptPath = 'scripts/test.py';
        $pythonCommand = "$virtualEnvPath/bin/python $scriptPath";

        $process = Process::fromShellCommandline($pythonCommand);
        $process->run();

        $output = $process->getOutput();

        $recognizedNames = [];
        $names = explode("\n", $output);
        foreach ($names as $name) {
            $name = trim($name);
            if (!empty($name)) {
                $recognizedNames[] = $name;
                echo "Name: $name\n";
            }
        }
        
        // Store recognized names in the database
        foreach ($recognizedNames as $name) {
            // Create a new instance of the RecognizedName model
            $recognizedName = new RecognizedName();

            // Set the name value
            $recognizedName->name = $name;

            echo "Name: $name\n";

            // Save the record in the database
     
            try {
                // Save the record in the database
                $saveResult = $recognizedName->save();
                if ($saveResult) {
                    echo "Name saved successfully.\n";
                } else {
                    echo "Failed to save name.\n";
                }
            } catch (\Exception $e) {
                // Log the error
                Log::error('Error saving name: ' . $e->getMessage());
            }
            
            
        }

        return view('home.blank', ['names' => $recognizedNames]);
    }
}
