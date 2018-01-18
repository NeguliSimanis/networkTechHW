<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use File;
use Storage;

class UploadController extends Controller
{
    public function show() {
        $directory = config('app.fileDestinationPath');
        $files = Storage::files($directory);
        return view ('upload')->with(array('files' => $files));
    }
    
    public function upload(Request $request) {
        // upload validation
        $file = Input::file('file');
        $allowedFileTypes = config('app.allowedFileTypes');
        $maxFileSize = config('app.maxFileSize');
        $rules = [
            'file' => 'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize
        ];
        $this->validate($request, $rules);
        $fileName = $file->getClientOriginalName();
        $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
        $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
        
        return redirect()->to('upload');
    }
    
    
}
