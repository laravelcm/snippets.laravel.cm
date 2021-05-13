<?php

use App\Http\Controllers\PasteController;
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

Route::view('/', 'create')->name('home');
Route::post('/', [PasteController::class, 'post']);
Route::get('{paste}', [PasteController::class, 'show'])->name('show');
Route::get('{paste}/raw', [PasteController::class, 'raw'])->name('raw');
Route::get('fork/{paste}', [PasteController::class, 'edit'])->name('edit');
Route::post('fork/{paste}', [PasteController::class, 'fork']);
