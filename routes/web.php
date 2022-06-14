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
    return view('home');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () { return view('AuthPage.login', ['tittle' => 'Login Page']); }) -> name('LoginPage');
    Route::post('/postlogin', [LoginController::class, 'login']) -> name('login');
    Route::post('/postregister', [RegisterController::class, 'register']) -> name('register');
    Route::get('/register', function () { return view('AuthPage.register', ['tittle' => 'Register Page']); }) -> name('RegisterPage');
});

Route::middleware(['auth','cekLevel:user'])->group(function () {
    Route::get('/home', [HomePageController::class, 'index']) -> name('HomePage');
});