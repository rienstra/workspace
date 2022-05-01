<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

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

// All Jobs
Route::get('/', function () {
    return view('jobs', [
        'heading' => 'Latest Jobs',
        // becuase our all() function is a static function we use '::'
        'jobs' => Job::all()
    ]);
});

// Single Jobs
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    if ($job) {
        return view('job', [
            'job' => Job::find($id)
        ]);
    } else {
        abort('404');
    }
});
