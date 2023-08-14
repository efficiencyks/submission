<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::get('/post', function () {
//     return '<h2>This is post page </h2>';
// });
Route::get('/form', function () {
    return view('form');
});





// Route::get('/post', function () {
//     return '<h2>This is post page </h2>';
// });
//return '<h1>Hello World</h1>';
