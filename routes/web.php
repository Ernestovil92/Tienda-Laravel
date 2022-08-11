<?php
use Illuminate\Support\Facades\Route;

//INFORMATICA
use App\Http\Controllers\lenovo;
use App\Http\Controllers\dell;
use App\Http\Controllers\asus;

//LIBROS
use App\Http\Controllers\comic;
use App\Http\Controllers\manga;
use App\Http\Controllers\terror;

//MOTOCICLETAS
use App\Http\Controllers\kenton;
use App\Http\Controllers\leopard;
use App\Http\Controllers\honda;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*

/*Route::get('/', function () { return view('welcome'); });*/
//COMPONENT PRINCIPAL
Route::get('/', function () { return view('admin/home/index'); });
Route::get('contacto', function () { return view('contacto'); });
Route::get('error', function () { return view('error'); });
Route::get('iconos', function () { return view('iconos'); });

//PRUEBA
Route::get('prueba', function () { return view('prueba'); });


//INFORMATICA
Route::controller(lenovo::class)->group(function(){
    Route::get('lenovo','lenovo')->name('inf.lenovo');
});
Route::controller(dell::class)->group(function(){
    Route::get('dell','dell')->name('inf.dell');
});
Route::controller(asus::class)->group(function(){
    Route::get('asus','asus')->name('inf.asus');
});


//LIBROS 
Route::controller(comic::class)->group(function(){
    Route::get('comic','comic')->name('lib.comic');
});

Route::controller(manga::class)->group(function(){
    Route::get('manga','manga')->name('lib.manga');
});

Route::controller(terror::class)->group(function(){
    Route::get('terror','terror')->name('lib.terror');
});

//MOTOCICLETA
Route::controller(kenton::class)->group(function(){
    Route::get('kenton','kenton')->name('moto.kenton');
});

Route::controller(leopard::class)->group(function(){
    Route::get('leopard','leopard')->name('moto.leopard');
});

Route::controller(honda::class)->group(function(){
    Route::get('honda','honda')->name('moto.honda');
});
