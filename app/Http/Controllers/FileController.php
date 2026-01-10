<?php

namespace App\Http\Controllers;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'file' => 'required|file|max:102400', // max 10MB
            'file_type' => 'required|string|in:exam,tutorial,course',
            'module_id' => 'required|exists:modules,id',
            'academic_year' => 'required|string',
            'semester' => 'required|integer|in:1,2',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $filePath = $request->file('file')->store('files', 'public');

        File::create([
            'module_id' => $validated['module_id'],
            'uploaded_by' => auth()->id(), // current logged-in user
            'title' => $validated['title'],
            'file_path' => $filePath,
            'file_type' => $validated['file_type'],
            'academic_year' => $validated['academic_year'],
            'semester' => $validated['semester'],
            'description' => $validated['description'],
        ]);

        return redirect()->back()->with('success', 'File uploaded successfully!');
    }
}
