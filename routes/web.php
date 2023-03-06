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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/table', function () {
    return view('table');
});


Route::get('/footer', function () {
    return view('footer');
});
Route::get('/homein', function () {
    return view('homein');
});

Route::get('/main', function () {
    return view('main');
});


Route::group(['prefix'=>'blog'], function(){
    Route::get('/',function(){
        return view("blog");
    })->name("blog");
    Route::get('/{any}',function(){
        return view('blog');
    })->where('any','.*');
});

