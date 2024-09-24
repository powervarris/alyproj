<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/album', function () {
    return view('album');
});


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/user/sdsdsds/dsdsd/sdsdsd/ssdssds', function () {
    return dd('user');
})-> name('user');

// Route::get('/user/{name}', function ($name) {
//     return dd('hello user' .$name);
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/checkout', function () {
        return view('checkout');
    })->name('checkout');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});

Route::get('/blogs',[UserController::class,'index']);
Route::get('/blogs-create',[UserController::class,'create'])->middleware(AdminMiddleware::class);
Route::get('/blogs/{id}', [UserController::class, 'show'])->middleware(UserMiddleware::class);
Route::post('/blogs', [UserController::class, 'store']);
Route::get('/blogs/{id}/edit', [UserController::class, 'edit'])->middleware(AdminMiddleware::class);
Route::put('/blogs/{id}', [UserController::class, 'update']);
Route::get('/usercreate', [UserController::class, 'userCreate']);
