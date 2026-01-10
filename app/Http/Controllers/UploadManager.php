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
            'module_id' => 'required|integer|in:1,2,3,4,5,6,7,8,9'

        ]);

        foreach( $request->file('files') as $file ){
            $path = $file->store('uploads/' . $request->category, 'public');

            \Log::info('File stored', ['filepath' => $path, 'name' => $file->getClientOriginalName()]);

            File::create([
            'filename' => $file->getClientOriginalName(),
            'filepath' => $path,
            'category' => $request->category,
            'module_id' => $request->module_id,
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
    public function index($moduleId)
{


    // Test query
    $allFiles = \App\Models\File::all();
    \Log::info('Total files in database: ' . $allFiles->count());
    
    foreach ($allFiles as $file) {
        \Log::info('File: ' . $file->name . ' | Category: "' . $file->category . '" | Length: ' . strlen($file->category));
    }
    
    $courses = \App\Models\File::where('category', 'courses')->where('module_id',$moduleId)->get();
    \Log::info('Courses found: ' . $courses->count());
    
    // Try without where clause to see all files
    $allAsTest = \App\Models\File::all();
    
    $modules = [
        1 => ['id' => 1, 'name' => 'THL'],
        2 => ['id' => 2, 'name' => 'THG'],
        3 => ['id' => 3, 'name' => 'THI'],
        4 => ['id' => 4, 'name' => 'THS'],
        5 => ['id' => 5, 'name' => 'BDD'],
        6 => ['id' => 6, 'name' => 'ADD'],
        7 => ['id' => 7, 'name' => 'Web'],
        8 => ['id' => 8, 'name' => 'RSX'],
        9 => ['id' => 9, 'name' => 'PAFA'],
    ];
     // Get the module or return 404
     if (!isset($modules[$moduleId])) {
        abort(404, 'Module not found');
    }

    $module = (object) $modules[$moduleId]; // Convert array to object for easier use
    
    return view('archive', [
        'module' => $module,
        'courses' => $courses,
        'tutorials' => \App\Models\File::where('category', 'tutorials')->where('module_id', $moduleId)->get(),
        'exams' => \App\Models\File::where('category', 'exams')->where('module_id', $moduleId)->get(),
    ]);
}
}