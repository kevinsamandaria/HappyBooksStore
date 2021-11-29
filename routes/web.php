<?php

use App\Http\Controllers\booksController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\detailsController;
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

Route::get('/category/{category}', [categoriesController::class, 'get']);

Route::get('/', [booksController::class, 'get']);

Route::get('/details/{details}', [detailsController::class, 'get']);

Route::get('/contact', function () {
    return view('Contact');
});
