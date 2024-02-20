<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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

Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::get('/thanks', [ContactController::class, 'thanks']);

Route::get('/', [CategoryController::class, 'index']);
Route::post('/contacts/confirm', [CategoryController::class, 'confirm']);
Route::post('/contacts', [CategoryController::class, 'store']);

Route::get('/login', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/auth', [UserController::class, 'store']);
Route::get('/admin', [UserController::class, 'admin']);
Route::delete('/auth/delete', [UserController::class, 'destroy']);

