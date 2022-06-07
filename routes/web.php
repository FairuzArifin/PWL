<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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
    return view('home'); 
});

Route::get('/form', function () {
    return view('form'); 
});

Route::get('/formpertanyaan', function () {
    return view('formpertanyaan'); 
});

Route::get('/formpengaduan', function () {
    return view('formpengaduan'); 
});

Route::get('/formurus', function () {
    return view('formurus'); 
});

Route::get('/login',[ LoginController::class, 'login'])->middleware('guest');
Route::post('/login',[ LoginController::class, 'authenticate']);
Route::post('/logout',[ LoginController::class, 'logout']);


Route::get('/register',[ RegisterController::class, 'register']);
Route::post('/register',[ RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');;

//Route::get('/register', function () {
    //return view('register');
//});
