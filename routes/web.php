<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminViewController;
use App\Http\Controllers\FormAdminstrasiController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\pic\FormsController;
use App\Http\Controllers\pic\UsersController;


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
Route::get('/dashboard/berita',[ FormAdminstrasiController::class, 'berita']);

Route::get('/admin',[ AdminViewController::class, 'index']);
Route::get('/pic',[ AdminViewController::class, 'pic']);

Route::get('tampil/{berita}',[App\Http\Controllers\Admin\Beritacontroller::class, 'tampil'])->name('tampil');
Route::get('/berita',function(){ 
    return view('dashboard.berita.tampil');
});

Route::get('/Admin/berita', [App\Http\Controllers\Admin\Beritacontroller::class, 'index'])->name('beritaindex');
Route::get('/Admin/berita/create', [App\Http\Controllers\Admin\Beritacontroller::class, 'create'])->name('beritacreate');
Route::get('/Admin//berita/edit/{id}', [App\Http\Controllers\Admin\Beritacontroller::class, 'edit'])->name('beritaedit');
Route::get('/Admin/berita/delete{id}', [App\Http\Controllers\Admin\Beritacontroller::class, 'destroy'])->name('beritadelete');
Route::post('/Admin/berita/store', [App\Http\Controllers\Admin\Beritacontroller::class, 'store'])->name('beritastore');
Route::put('/Admin/berita/update/{id}', [App\Http\Controllers\Admin\Beritacontroller::class, 'update'])->name('beritaupdate');

Route::get('/Admin/form', [App\Http\Controllers\Admin\Formcontroller::class, 'index'])->name('formindex');
Route::get('/Admin/create', [App\Http\Controllers\Admin\Formcontroller::class, 'create'])->name('formcreate');
Route::get('/Admin/edit/{id}', [App\Http\Controllers\Admin\Formcontroller::class, 'edit'])->name('formedit');
Route::get('/Admin/delete{id}', [App\Http\Controllers\Admin\Formcontroller::class, 'destroy'])->name('formdelete');
Route::post('/Admin/store', [App\Http\Controllers\Admin\Formcontroller::class, 'store'])->name('formstore');
Route::put('/Admin/update/{id}', [App\Http\Controllers\Admin\Formcontroller::class, 'update'])->name('formupdate');

Route::get('/Admin/user', [App\Http\Controllers\Admin\Usercontroller::class, 'index'])->name('userindex');
Route::get('/Admin/user/create', [App\Http\Controllers\Admin\Usercontroller::class, 'create'])->name('usercreate');
Route::get('/Admin//user/edit/{id}', [App\Http\Controllers\Admin\Usercontroller::class, 'edit'])->name('useredit');
Route::get('/Admin/user/delete{id}', [App\Http\Controllers\Admin\Usercontroller::class, 'destroy'])->name('userdelete');
Route::post('/Admin/user/store', [App\Http\Controllers\Admin\Usercontroller::class, 'store'])->name('userstore');
Route::put('/Admin/user/update/{id}', [App\Http\Controllers\Admin\Usercontroller::class, 'update'])->name('userupdate');

Route::get('/PIC/user', [App\Http\Controllers\PIC\Userscontroller::class, 'index'])->name('usersindex');
Route::get('/PIC/user/create', [App\Http\Controllers\PIC\Userscontroller::class, 'create'])->name('userscreate');
Route::get('/PIC/user/edit/{id}', [App\Http\Controllers\PIC\Userscontroller::class, 'edit'])->name('usersedit');
Route::get('/PIC/user/delete{id}', [App\Http\Controllers\PIC\Userscontroller::class, 'destroy'])->name('usersdelete');
Route::post('/PIC/user/store', [App\Http\Controllers\PIC\Userscontroller::class, 'store'])->name('usersstore');
Route::put('/PIC/user/update/{id}', [App\Http\Controllers\PIC\Userscontroller::class, 'update'])->name('usersupdate');

Route::get('/pic/form', [App\Http\Controllers\PIC\Formscontroller::class, 'index'])->name('formsindex');
Route::get('/pic/create', [App\Http\Controllers\PIC\Formscontroller::class, 'create'])->name('formscreate');
Route::get('/pic/edit/{id}', [App\Http\Controllers\PIC\Formscontroller::class, 'edit'])->name('formsedit');
Route::get('/pic/delete{id}', [App\Http\Controllers\PIC\Formscontroller::class, 'destroy'])->name('formsdelete');
Route::post('/pic/store', [App\Http\Controllers\PIC\Formscontroller::class, 'store'])->name('formsstore');
Route::put('/pic/update/{id}', [App\Http\Controllers\PIC\Formscontroller::class, 'update'])->name('formsupdate');
//Route::get('/register', function () {
    //return view('register');
//});
