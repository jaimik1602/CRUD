<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Controller\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class,'index']);
Route::get('/users/create', [UserController::class,'create']);
Route::post('/users/store', [UserController::class,'store']);
