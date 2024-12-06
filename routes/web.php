<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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