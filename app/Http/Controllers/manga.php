<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manga extends Controller
{
    public function manga(){
        return view('admin/libros/manga/index');
    }
}
