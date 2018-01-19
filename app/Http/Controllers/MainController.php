<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadedFile;

class MainController extends Controller
{
    public function mainpage() {
        $files = UploadedFile::all();
        return view ('mainpage')->with(array('files' => $files));
    }
}
