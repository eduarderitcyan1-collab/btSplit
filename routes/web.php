<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kontakty', function () {
    return view('kontakty');
})->name('kontakty');
