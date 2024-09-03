<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;    

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', [HomeController::class, 'about']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/spares', [HomeController::class, 'spares']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/tractors', [HomeController::class, 'tractors']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/18v', [HomeController::class, 'veight']);

Route::get('/110', [HomeController::class, 'oneten']);

Route::get('/4520', [HomeController::class, 'fourfive']);
Route::get('/4720', [HomeController::class, 'fourseven']);
Route::get('/5520', [HomeController::class, 'fivefive']);
Route::get('/7520', [HomeController::class, 'sevenfive']);
Route::get('/9220', [HomeController::class, 'ninetwo']);
Route::get('/s26', [HomeController::class, 'stwosix']);