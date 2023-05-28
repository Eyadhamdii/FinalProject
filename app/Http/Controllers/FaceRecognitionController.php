<?php

namespace App\Http\Controllers;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;
use App\Models\RecognizedName;

class FaceRecognitionController extends Controller
{
    public function recognize()
    {
        $virtualEnvPath = 'scripts/myenv'; // Replace with the path to your virtual environment
        
        // Execute the Python script using the virtual environment's Python interpreter
        $scriptPath = 'scripts/test.py';
        $pythonCommand = "$virtualEnvPath/bin/python $scriptPath";

        $timeout = 120;

        $process = Process::fromShellCommandline($pythonCommand);
        $process->setTimeout($timeout);
        $process->run();

        // Check if the execution was successful
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        // Get the output from the Python script
        $output = $process->getOutput();

        echo "Output: $output\n";

        // Process the output as needed
        $recognizedNames = explode("\n", $output);

        // Store recognized names in the database
        foreach ($recognizedNames as $name) {
            // Create a new instance of the RecognizedName model
            $recognizedName = new RecognizedName();

            // Set the name value
            $recognizedName->name = $name;

            echo "Name: $name\n";

            // Save the record in the database
            $saveResult = $recognizedName->save();


            if ($saveResult) {
                echo "Name saved successfully.\n";
            } else {
                echo "Failed to save name.\n";
            }
        }
        
        return view('home.blank', ['names' => $recognizedNames]);
    }
}
