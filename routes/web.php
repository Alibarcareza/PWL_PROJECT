<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\CekLevel;

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

Route::post('/logout', [LoginController::class, 'logout']) -> name('logout');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () { return view('AuthPage.login', ['tittle' => 'Login Page']); }) -> name('LoginPage');
    Route::post('/postlogin', [LoginController::class, 'login']) -> name('login');
    Route::post('/postregister', [RegisterController::class, 'register']) -> name('register');
    Route::get('/register', function () { return view('AuthPage.register', ['tittle' => 'Register Page']); }) -> name('RegisterPage');
});

Route::get('/Profile', [HomePageController::class, 'profile'])->name('ProfilePage');

Route::middleware(['middleware' => 'cekLevel:user'])->group(function () {
    Route::get('/home', [HomePageController::class, 'index']) -> name('HomePage');
});