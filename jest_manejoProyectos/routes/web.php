<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< HEAD
=======
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
>>>>>>> 5434586fcb31fce12b3be520e63737371da5c51f
    return view('pages.index');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

<<<<<<< HEAD
?> 
=======

>>>>>>> 5434586fcb31fce12b3be520e63737371da5c51f
