<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/user/{name}', function ($name) {
    return 'Salut '. $name;
});
Route::get('/hello', function(){
    return view('hello',[
        'data'=> 'contenu'
    ]);
})->name('ma_route');
Route::get('/redirection', function(){
    return redirect()->route('ma_route');
});
Route::redirect('/test', '/hello');

