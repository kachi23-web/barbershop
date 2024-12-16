<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('index');
// });


 
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/services', [PageController::class, 'service']);
Route::get('/book', [PageController::class, 'book']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/team', [PageController::class, 'team']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/academy', [PageController::class, 'academy']);


// Admin Routes
Route::get('/admin-dash/index', [AdminController::class, 'index']);
Route::get('/admin-dash/profile', [AdminController::class, 'profile']);
