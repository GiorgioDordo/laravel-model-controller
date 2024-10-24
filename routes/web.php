<?php
use App\Http\Controllers\MovieController;
use App\Http\Controllers\HomneController;
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



Route::get('/', [HomneController::class, 'home']);

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');