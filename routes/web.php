<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\signUpController;
use App\Http\Controllers\signInController;

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

Route::get('/', [DemoController::class, 'show'])->name('demo.show');
Route::get('/signin', [signInController::class, 'getSignIn'])->name('sign.in');
Route::post('/signin', [signInController::class, 'postSignIn']);


Route::get('/signup', [signUpController::class, 'getSignUp'])->name('sign.up');
Route::post('/signup', [signUpController::class, 'postSignUp']);
