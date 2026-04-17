<?php

use Illuminate\Support\Facades\Route;

// For every new page you want to create, you'll add more routes like this.
Route::get('/', function () {
    return view('index'); // Now looks for index.blade.php (not welcome.blade.php)
});

Route::get('/login', function () {
    return view('login'); 
});

Route::get('/signup', function () {
    return view('signup'); 
});

Route::get('/dashboard', function () {
    return view('user_dashboard'); // Create this view
})->middleware('auth');

// for packages syntax
if (app()->environment('local')) {
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
}
