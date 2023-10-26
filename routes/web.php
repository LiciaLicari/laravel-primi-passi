<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
    $name = 'Licia';
    $surname = 'Licari';
    return view(
        'home',
        ['name' => $name],
        ['surname' => $surname]
    );
});

Route::get('/contact', function () {
    $email = 'LiciaL@email.it';
    return view(
        'contact',
        ['email' => $email]
    );
});
