<?php

use App\Http\Controllers\favoriesController;
use App\Http\Controllers\HomeComtroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShearchController;
use App\Http\Controllers\UsersController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;


Route::get('/HotelBooking/{id}', [HomeComtroller::class , 'HotelDescription'])->name('description');


Route::get('/login', function () {
    return view('loginTemplate.login');
});

Route::get('/Assistance', function () {
    return view('Assistance.Main');
})->name('Assistance');


// Route::post('/Hotels/Filter',[ShearchController::class , 'show'])->name('Hotels');
Route::post('/Hotels/Filter',[ShearchController::class , 'show'])->name('Hotel.filter');


Route::middleware('guest')->group(function (){
    Route::get('/', [HomeComtroller::class , 'index'])->name('main');
    Route::get('/login' , [LoginController::class , 'index'])->name('login');
    Route::get('/SIgnUp' , [LoginController::class , 'SignUp'])->name('signUp');
    Route::post('/register' , [LoginController::class , 'register'])->name('signUp.register');
    Route::post('/login' , [LoginController::class , 'Login'])->name('login.sub');
});


Route::middleware('auth')->group(function () {
    Route::get('/home' , [UsersController::class , 'index'])->name('UserPage');
    Route::post('/logout' , [LoginController::class , 'Logout'])->name('login.logout');
    Route::get('/favories/{id}',[favoriesController::class,'show'])->name('favoris.show');
    Route::get('/Payment/{id}',[PaymentController::class,'index'])->name('Payment');
    Route::post('/sendMail',[PaymentController::class,'sendEmail'])->name('MailSend');

});

