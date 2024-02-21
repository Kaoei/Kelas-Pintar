<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

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

Route::get('/chat', [ChatController::class, 'index'])->name('chat');
Route::get('/chat/create', [ChatController::class, 'create'])->name('createChat');
Route::post('/chat', [ChatController::class, 'action'])->name('actionChat');
Route::get('/chat/detail/{detail}', [ChatController::class, 'detail'])->name('detailChat');
