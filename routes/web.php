<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminViewController;
use App\Http\Controllers\FormAdminstrasiController;
use App\Http\Controllers\Admin\FormController;


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

Route::get('/login',[ LoginController::class, 'login'])->middleware('guest');
Route::post('/login',[ LoginController::class, 'authenticate']);
Route::post('/logout',[ LoginController::class, 'logout'])->name('logout');


Route::get('/register',[ RegisterController::class, 'register']);
Route::post('/register',[ RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/formAdminstrasi',[ FormAdminstrasiController::class, 'index']);
Route::post('/dashboard/formAdminstrasi',[ FormAdminstrasiController::class, 'store']);
Route::get('/dashboard/listform',[ FormAdminstrasiController::class, 'list']);

Route::get('/admin',[ AdminViewController::class, 'index']);

Route::get('/Admin/berita', [App\Http\Controllers\Admin\Beritacontroller::class, 'index'])->name('beritaindex');
Route::get('/Admin/create', [App\Http\Controllers\Admin\Beritacontroller::class, 'create'])->name('beritacreate');
Route::get('/Admin/edit/{id}', [App\Http\Controllers\Admin\Beritacontroller::class, 'edit'])->name('beritaedit');
Route::get('/Admin/delete{id}', [App\Http\Controllers\Admin\Beritacontroller::class, 'destroy'])->name('beritadelete');
Route::post('/Admin/store', [App\Http\Controllers\Admin\Beritacontroller::class, 'store'])->name('beritastore');
Route::put('/Admin/update/{id}', [App\Http\Controllers\Admin\Beritacontroller::class, 'update'])->name('beritaupdate');

Route::get('/Admin/form', [App\Http\Controllers\Admin\Formcontroller::class, 'index'])->name('formindex');
Route::get('/Admin/create', [App\Http\Controllers\Admin\Formcontroller::class, 'create'])->name('formcreate');
Route::get('/Admin/edit/{id}', [App\Http\Controllers\Admin\Formcontroller::class, 'edit'])->name('formedit');
Route::get('/Admin/delete{id}', [App\Http\Controllers\Admin\Formcontroller::class, 'destroy'])->name('formdelete');
Route::post('/Admin/store', [App\Http\Controllers\Admin\Formcontroller::class, 'store'])->name('formstore');
Route::put('/Admin/update/{id}', [App\Http\Controllers\Admin\Formcontroller::class, 'update'])->name('formupdate');

//Route::get('/register', function () {
    //return view('register');
//});
