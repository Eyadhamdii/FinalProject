<?php

namespace App\Http\Controllers;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

use Illuminate\Http\Request;

class PythonController extends Controller
{
    public function runScript()
    {
        $envPath = base_path('scripts/myenv/bin/activate');
        $pythonPath = '/usr/bin/python';
        $scriptPath = base_path('scripts/test.py');
    
        $process = new Process([$envPath, '&&', $pythonPath, $scriptPath]);
        $process->run();
    
        if (!$process->isSuccessful()) {
            throw new \RuntimeException($process->getErrorOutput());
        }
    
        $output = $process->getOutput();
    
        // Process the output or return a response
        return response()->json(['output' => $output]);
    }
    




    public function runFaceRecognition()
    {
        // Call the Python script using a process
        $command = 'python ' . base_path('scripts/test.py');
        $process = new Process([$command]);
        $process->run();
    
        // Check if the process was successful
        if (!$process->isSuccessful()) {
            throw new \RuntimeException($process->getErrorOutput());
        }
    
        // Get the output of the Python script
        $output = $process->getOutput();
    
        // Format the output as a response
        $response = [
            'output' => $output,
        ];
    
        // Return the response as JSON
        return response()->json($response);
    }
    
}
