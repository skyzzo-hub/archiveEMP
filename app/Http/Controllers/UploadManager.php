<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File ;
use Illuminate\Support\Facades\Storage;
class UploadManager extends Controller
{
    public function upload(Request $request){

        \Log::info('Upload started', ['category' => $request->category]);
        
        $request->validate([
            'files.*' => 'required|file',
            'category' => 'required|in:courses,tutorials,exams',
        ]);

        foreach( $request->file('files') as $file ){
            $path = $file->store('uploads/' . $request->category, 'public');

            \Log::info('File stored', ['filepath' => $path, 'name' => $file->getClientOriginalName()]);

            File::create([
            'filename' => $file->getClientOriginalName(),
            'filepath' => $path,
            'category' => $request->category,
            'size' => $file->getSize(),
            'filetype' => $file->getClientOriginalExtension()
        ]);

        return response()->json(['success' => true]);
         }
    }

public function download(File $file)
{
    $path = $file->filepath;

    if (! Storage::disk('public')->exists($path)) {
        abort(404, 'File not found');
    }

    return response()->download(
        Storage::disk('public')->path($path),
        $file->filename
    );
}
    public function index()
{
    // Test query
    $allFiles = \App\Models\File::all();
    \Log::info('Total files in database: ' . $allFiles->count());
    
    foreach ($allFiles as $file) {
        \Log::info('File: ' . $file->name . ' | Category: "' . $file->category . '" | Length: ' . strlen($file->category));
    }
    
    $courses = \App\Models\File::where('category', 'courses')->get();
    \Log::info('Courses found: ' . $courses->count());
    
    // Try without where clause to see all files
    $allAsTest = \App\Models\File::all();
    
    return view('archive', [
        'courses' => $courses,
        'tutorials' => \App\Models\File::where('category', 'tutorials')->get(),
        'exams' => \App\Models\File::where('category', 'exams')->get(),
        'allFiles' => $allAsTest // temporary for debugging
    ]);
}
}