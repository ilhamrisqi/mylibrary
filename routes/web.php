<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WriterController;
use \App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', [ \App\Http\Controllers\WriterController::class, 'index' ]);

Route::get('/about', function () {
    return view('about', [
        "title" => "About Us",
        "main" => "contact : @ilhamrisqir"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "WA : 082226401130",
        "main" => "line : posengbersama",
    ]);
});


Route::get('/', [WriterController::class, 'index']);

Route::get('/writer/{writer}', [WriterController::class, 'show']);

Route::get('/admin', function () {
    return view('admin.index',[
        "pagetitle"=>"Admin"
    ]);
})->middleware(['admin']);


Route::resource('books', \App\Http\Controllers\BooksController::class)->middleware(['admin']);

require __DIR__.'/auth.php';

//Route::get('/show', [\App\Http\Controllers\WriterController::class, 'show']);
