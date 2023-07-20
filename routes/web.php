<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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

// All listings
Route::get('/', [ListingController::class,'index']);

// Show Cream Form
Route::get('/listings/create', [ListingController::class,'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing Data
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing Data
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create Form
Route::get('/register',[UserController::class, 'create']);

// Create New Users
Route::post('/users',[UserController::class, 'store']);

// Log User Out
Route::post('/logout',[UserController::class, 'logout']);

// Show Login Form
Route::get('/login',[UserController::class, 'login']);

// Login User
Route::post('/users/authenticate',[UserController::class, 'authenticate']);