<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Models\File ;
use Illuminate\Support\Facades\Storage;
class UploadManager extends Controller
{

    public function destroy(File $file)
    {
        try {
            // Delete the physical file from storage
            if (Storage::disk('public')->exists($file->filepath)) {
                Storage::disk('public')->delete($file->filepath);
            }
            
            // Delete the database record
            $file->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'File deleted successfully'
            ]);
            
        } catch (\Exception $e) {
            \Log::error('File deletion error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete file'
            ], 500);
        }
    }
    public function upload(Request $request){

        
        $request->validate([
            'files.*' => 'required|file',
            'category' => 'required|in:courses,tutorials,exams',
            'module_id' => 'required|integer|in:1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24'

        ]);

        foreach( $request->file('files') as $file ){
            $path = $file->store('uploads/' . $request->category, 'public');

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
public function index($id)
{

    
    $courses = \App\Models\File::where('category', 'courses')->where('module_id',$id)->get();
    

    
    $module = Module::findOrFail($id);
    
    
    return view('archive', [
        'module' => $module,
        'courses' => $courses,
        'tutorials' => \App\Models\File::where('category', 'tutorials')->where('module_id', $id)->get(),
        'exams' => \App\Models\File::where('category', 'exams')->where('module_id', $id)->get(),
    ]);
}
}