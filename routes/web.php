<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user_master');
})->name('home');
