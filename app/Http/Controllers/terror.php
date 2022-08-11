<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class terror extends Controller
{
    public function terror(){
        return view('admin/libros/terror/index');
    }
}
