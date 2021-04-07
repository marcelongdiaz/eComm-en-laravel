<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerDetailsController;
use App\Http\Controllers\SessionController;
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

Route::get('/login', function () {
    return view('login');
});

Route::post("/login", [UserController::class, 'login']);
Route::post("/add_to_cart", [ProductController::class, 'addToCart']);
Route::get("/", [ProductController::class, 'index']);
Route::get("/session/logout", [SessionController::class, 'logout']);
Route::get("/customerdetails", [CustomerDetailsController::class, 'index']);
Route::get("detail/{id}", [ProductController::class, 'details']);
