<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', StudentController::class);
Route::get('contacts',[ContactController::class, 'index'])
    ->name('contacts.index');
    
