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
})->middleware('auth');

Route::get('/login',function(){
    return view('login');
})->name('login');
Route::post('/login',[\App\Http\Controllers\Controller::class,'login']);
Route::get('/install',function(){
    \Illuminate\Support\Facades\Artisan::call('migrate');
    \Illuminate\Support\Facades\Artisan::call('db:seed');
});
Route::post('/new_link',[\App\Http\Controllers\Controller::class,'new_link'])->middleware('auth');
Route::post('/remove_link',[\App\Http\Controllers\Controller::class,'remove_link'])->middleware('auth');
Route::post('/update_link',[\App\Http\Controllers\Controller::class,'update_link'])->middleware('auth');
Route::post('/save_settings',[\App\Http\Controllers\Controller::class,'save_settings'])->middleware('auth');
Route::get('/demo',function(){return view('demo');})->middleware('auth');
Route::get('render_menu',function(){
    return view('render');
});
