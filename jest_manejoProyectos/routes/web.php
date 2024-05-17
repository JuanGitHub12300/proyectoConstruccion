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

?>

Route::view('/proyectos', 'proyecto.index');

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
>>>>>>> a6af6385e5acec89c5025414cc84da3810c91741
    return view('pages.index');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

?>
<<<<<<< HEAD
=======



>>>>>>> a6af6385e5acec89c5025414cc84da3810c91741
