<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
    return view('welcome');
});

// Route::get('/chat', [TestController::class, 'index']);
// Route::get('/page-form', [TestController::class, 'form']);
// Route::post('/page-form', [TestController::class, 'index']);


Route::get('/home', [PageController::class, 'index']);
Route::get('/resume', [PageController::class, 'resume']);
Route::get('/projects', [PageController::class, 'projects']);
Route::get('/contact', [PageController::class, 'contact']);
Route::post('/contact', [PageController::class, 'contactForm']);
