<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::post('/form', [UserController::class,'adduser'])->name('form');
Route::post('/loginuser', [UserController::class,'loginuser'])->name('loginuser');

// Route::post('/loginuser', [UserController::class,'loginuser'])->name('loginuser');


Route::get('/form', function () {

    return view('welcome');
});

Route::get('/login', function () {

    return view('login');
})->name('login');
// Route::get('/table', function () {

//     return view('table');viewuser
// });
Route::get('/table', [UserController::class,'newuser'])->name('table');
Route::get('/view/{id}', [UserController::class,'singleuser'])->name('view');
Route::get('/delete/{id}', [UserController::class,'deleteuser'])->name('delete');
Route::post('/update/{id}', [UserController::class,'updateuser'])->name('updateuser');
Route::get('/updatepage/{id}', [UserController::class,'updatepage'])->name('updatepage');
