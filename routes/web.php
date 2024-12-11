<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\RegisteredStaffController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/guidelines', 'guidelines');
Route::view('/contact', 'contact');
// Route::view('/items', []);

//Auth
Route::get('/register/user', [RegisteredUserController::class, 'create']);
Route::post('/register/user', [RegisteredUserController::class, 'store']);
Route::get('/register/staff', [RegisteredStaffController::class, 'create']);
Route::post('/register/staff', [RegisteredStaffController::class, 'store']);
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

//Items
Route::get('/browse', [ItemController::class, 'index']);
Route::get('/search', [ItemController::class, 'search']);
Route::get('items/create/lost', [ItemController::class, 'createLost']);
Route::post('items/create/lost', [ItemController::class, 'storeLost']);
Route::get('items/create/found', [ItemController::class, 'createFound']);
Route::post('items/create/found', [ItemController::class, 'storeFound']);
Route::get('items/{item:id}', [ItemController::class, 'show']);
Route::get('items/{item:id}/edit', [ItemController::class, 'edit']);
Route::patch('items/{item:id}', [ItemController::class, 'update']);
Route::delete('items/{item:id}', [ItemController::class, 'destroy']);
// Route::get('items/create', [ItemController::class, 'destroy']);


