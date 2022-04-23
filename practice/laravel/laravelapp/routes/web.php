<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
    Methods

    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource
    PATCH - Modify a resource (only modifies values that have been changed)
    DELETE  - Delete a resources
    OPTIONS - Ask the server which verbs are allowed
*/

// GET (for getting all blogs)
Route::get('/blog', [PostsController::class, 'index'])->name('blog.index');
// Make route parameter optional
// Route::get('/blog/{id?}', [PostsController::class, 'show'])->whereNumber('id');
// Route::get('/blog/{name}', [PostsController::class, 'show'])->where('name', '[A-Za-z]+');

Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])
    ->whereNumber('id')
    ->whereAlpha('name');


// POST
Route::get('/blog/create', [PostsController::class, 'create'])->name('blog.create');
Route::post('/blog/', [PostsController::class, 'store'])
    ->name('blog.store');

// PUT OR PATCH
Route::get('/blog/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
Route::patch('/blog/{id}', [PostsController::class, 'update'])->name('blog.update');

// DELETE
Route::delete('/blog/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');

// Route::resource('/blog', PostsController::class);

// Route for invoke method
Route::get('/', HomeController::class);

// Multiple HTTP verbs
// Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
// Route::any('/blog', [PostsController::class, 'index']);

// Return view
// Route::view('/blog', 'blog.index', ['name' => 'Ruben Rienstra']);
