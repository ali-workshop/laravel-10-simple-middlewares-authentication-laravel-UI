<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// i have tow ways for using the middle ware 
//first one from the construct in the controller 
Route::get('/log', [App\Http\Controllers\LogoutrequestController::class, 'index'])->name('logoutrequest');
//second one from the here the route. 
// Route::get('/log', [App\Http\Controllers\LogoutrequestController::class, 'index'])->middleware('logoutrequest')->name('logoutrequest');