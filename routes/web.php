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

Route::get('/admin-dash/invoice-detail', [AdminController::class, 'invoiceDetail']);
Route::get('/admin-dash/invoice-generator', [AdminController::class, 'invoiceGenerator']);
Route::get('/admin-dash/invoice-list', [AdminController::class, 'invoiceList']);

Route::get('/admin-dash/mail', [AdminController::class, 'mail']);
Route::get('/admin-dash/mail-details', [AdminController::class, 'mailDetails']);
Route::get('/admin-dash/mail-draft', [AdminController::class, 'mailDraft']);


Route::get('/admin-dash/blog', [AdminController::class, 'blog']);
Route::get('/admin-dash/create-post', [AdminController::class, 'createPost']);
