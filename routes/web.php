<?php

use Illuminate\Support\Facades\Route;
use App\Http\firstcontrollers;                          //using the controller
use  App\Http\Controllers\crud;                         //using the resorce controller

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

Route::get('create', function () {
    return view('welcome');
});
Route::get('aaa', function () {
    return view('abc');
});

Route::get('/', function () {
    return view('create');
});

Route::get('edit', function () {
    return view('edit');
});


// Route::get('read', function () {
//     return view('read');
// });

Route::resource('aaa', crud::class);                        
Route::get('read',[crud::class, "create"]);