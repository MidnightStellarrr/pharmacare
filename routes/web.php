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
