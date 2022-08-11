<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class honda extends Controller
{
    public function honda(){
        return view('admin/motocicleta/honda/index');
    }
}
