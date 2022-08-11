<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comic extends Controller
{
    public function comic(){
        return view('admin/libros/comic/index');
    }
}
