<?php

use Illuminate\Support\Facades\Route;

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
//Route::get('/', [UserController::class, "ShowCorrectHomepage"]);


Route::get('/', function () {
    return view('welcome');
});
Route::post('/submit_obituary', [ObituaryController::class, 'store'])->name('submit_obituary');

Route::get('/view_obituaries', [ObituaryController::class, 'index'])->name('view_obituaries');




Route::post('/submit_obituary', [ObituaryController::class, "submit"]);
Route::post('/view_obituaries', [ObituaryController::class, "index"]);



