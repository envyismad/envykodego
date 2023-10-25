<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});


Route::get('/contactus', [ContactController::class, 'show']);
Route::post('/contactus', [ContactController::class, 'store'])->name('contact.store');



