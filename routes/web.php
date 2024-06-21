<?php

use App\Http\Controllers\HomeComtroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeComtroller::class , 'index'])->name('main');
Route::get('/HotelBooking/{id}', [HomeComtroller::class , 'HotelDescription'])->name('description');


Route::get('/login', function () {
    return view('loginTemplate.login');
});

Route::get('/Assistance', function () {
    return view('Assistance.Main');
})->name('Assistance');

Route::get('/User', function () {
    return view('User.MainUser');
})->name('UserPage');
