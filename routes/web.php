<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ContactController;
//Guest
Route::get('/', [GuestController::class, 'index'])->name('guest.index');


//Dashboard
Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

//Contacts message
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');