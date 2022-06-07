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

Route::get('/form2', function () {
    return view('form2'); 
});

Route::get('/login',[ LoginController::class, 'login']);
Route::post('/login',[ LoginController::class, 'authenticate']);

Route::get('/register',[ RegisterController::class, 'register']);
Route::post('/register',[ RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);

//Route::get('/register', function () {
    //return view('register');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');

Route::get('/logout',function(){
    auth()->logout();
    session()->flush();
    return Redirect::to('/');
})->name('logout');

Route::get('/admin/berita', [App\Http\Controllers\Admin\BeritaController::class, 'index'])->name('beritaindex');
Route::get('/admin/create', [App\Http\Controllers\Admin\BeritaController::class, 'create'])->name('beritacreate');
Route::get('/admin/edit/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'edit'])->name('beritaedit');
Route::get('/admin/delete{id}', [App\Http\Controllers\Admin\BeritaController::class, 'destroy'])->name('beritadelete');
Route::post('/admin/store', [App\Http\Controllers\Admin\BeritaController::class, 'store'])->name('beritastore');
Route::put('/admin/update/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'update'])->name('beritaupdate');

Route::get('/admin/form', [App\Http\Controllers\Admin\FormController::class, 'index'])->name('formindex');
Route::get('/admin/create', [App\Http\Controllers\Admin\FormController::class, 'create'])->name('formcreate');
Route::get('/admin/edit/{id}', [App\Http\Controllers\Admin\FormController::class, 'edit'])->name('formedit');
Route::get('/admin/delete{id}', [App\Http\Controllers\Admin\FormController::class, 'destroy'])->name('formdelete');
Route::post('/admin/store', [App\Http\Controllers\Admin\FormController::class, 'store'])->name('formstore');
Route::put('/admin/update/{id}', [App\Http\Controllers\Admin\FormController::class, 'update'])->name('formupdate');