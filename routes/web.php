<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlatController;


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
    return view('AuthPage.login', ['tittle' => 'Login Page']);
});

Route::get("/home", function(){
    return view('home');
 });
Route::get('/logout', [LoginController::class, 'logout']) -> name('logout2');
Route::post('/logout', [LoginController::class, 'logout']) -> name('logout');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () { return view('AuthPage.login', ['tittle' => 'Login Page']); }) -> name('login');
    Route::post('/postlogin', [LoginController::class, 'login']) -> name('postLogins');
    Route::post('/postregister', [RegisterController::class, 'register']) -> name('register');
    Route::get('/register', function () { return view('AuthPage.register', ['tittle' => 'Register Page']); }) -> name('RegisterPage');
});

Route::get('/Profile', [HomePageController::class, 'profile'])->name('ProfilePage');


Route::middleware(['auth','cekLevel:user'])->group(function () {
    Route::get('/', [HomePageController::class, 'index']) -> name('HomePage');
    Route::get('/peminjamanAlat', [UserController::class, 'index']) -> name('PeminjamanAlat');
    Route::get('/peminjamanAlat/{id}', [UserController::class, 'pinjam']) -> name('PinjamAlat');
    Route::post('/postPeminjamanAlat', [UserController::class, 'pinjamAlat']) -> name('PostPinjamAlat');
});

Route::middleware(['auth','cekLevel:admin'])->group(function () {
    Route::get('/homeAdmin', [AdminController::class, 'index']) -> name('HomePageAdmin');
    // Route::get('/home', [HomePageController::class, 'index']) -> name('HomePage');
    Route::get('/dataAlat', [AdminController::class, 'dataAlat']) -> name('DataAlatPage');
    Route::get('/dataPeminjam', [AdminController::class, 'dataPeminjam']) -> name('DataPeminjamPage');

    Route::get('/createUser', [AdminController::class, 'createUser']) -> name('CreateUser');
    Route::post('/postCreateUser', [AdminController::class, 'storeUser']) -> name('PostCreateUser');
    Route::get('/editUser/{id}', [AdminController::class, 'editUser']) -> name('EditUser');
    Route::post('/update/{id}', [AdminController::class, 'updateDataUser']) -> name('UpdateUser');
    Route::get('/deleteUser/{id}', [AdminController::class, 'destroyUser']) -> name('DeletePengguna');

    Route::get('/createAlat', [AlatController::class, 'createAlat']) -> name('CreateAlat');
    Route::post('/postCreateAlat', [AlatController::class, 'storeAlat']) -> name('PostCreateAlat');
    Route::get('/editAlat/{id}', [AlatController::class, 'editAlat']) -> name('EditAlat');
    Route::post('/updateAlat/{id}', [AlatController::class, 'updateDataAlat']) -> name('UpdateAlat');
    Route::get('/deleteAlat/{id}', [AlatController::class, 'destroyAlat']) -> name('DeleteAlat');
    Route::get('/printAlat', [AlatController::class, 'cetakDataAlat']) -> name('CetakDataAlat');

    Route::get('/printStruk/{id}', [AdminController::class, 'cetakStruk']) -> name('Print');
    Route::get('/kembaliAlat/{id}', [AdminController::class, 'pengembalianAlat']) -> name('Pengembalian');
});

Route::get('/uploads', 'UploadsController@index')->name('uploads');
Route::post('/save','UploadsController@store')->name('uploads.store');