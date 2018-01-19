<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class StartPageController extends Controller
{
    public function welcome($lang=null) {
        App::setLocale($lang);
        return view ('startpage');
    }
}
