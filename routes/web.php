<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Reset_PasswordController;
use App\Http\Controllers\DashboardController;
use \App\Http\Controllers\LayoutController;
use \App\Http\Controllers\Forgot_PasswordController;

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
/*
Route::get('/Login', function () {
    return view('login');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Reset', function () {
    return view('ResetPass');
});
Route::get('/', function () {
    return view('LandingPage');
});*/

Route::get('/',[PageController::class,'index'])->name('home');

Route::get('/Register',[RegisterController::class,'create'])->name('register-page')->middleware('guest');;
Route::post('/Register',[RegisterController::class,'store'])->name('register-data');

Route::get('/Login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/Login',[LoginController::class,'authenticate']);
Route::post('/Logout',[LoginController::class,'logout'])->name('logout');

Route::get('/Forgot_Password',[Forgot_PasswordController::class,'index'])->name('forgot');
Route::post('/Forgot_Password',[Forgot_PasswordController::class,'authenticate']);

Route::get('/Reset_Password', [Reset_PasswordController::class,'index'])->name('reset');

Route::get('/Dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');

Route::get('/Layout',[LayoutController::class,'index'])->name('Finance');




/*


*/
