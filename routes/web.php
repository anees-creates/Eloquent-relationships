<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', StudentController::class);
Route::get('contacts',[ContactController::class, 'index'])
    ->name('contacts.index');
Route::resource('users', UserController::class);
Route::resource('posts',PostController::class);
