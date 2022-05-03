<?php

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;

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
// Common Resource Routes:
// index - show all jobs
// show - show single jobs
// create - show form to create new job
// store - store new job
// edit - show form to edit job
// update - update job
// destroy - delete job

// All Jobs
Route::get('/', [JobController::class, 'index']);

// Show Create Form 
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');

// Store Job Data
Route::post('/jobs', [JobController::class, 'store']);

// Show Edit Form
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

// Update Job
Route::put('/jobs/{job}', [JobController::class, 'update']);

// Delete Job
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// Single Jobs
Route::get('/jobs/{job}', [JobController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Log In Usser
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
