<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.mainpage.Index');
});

// Route::get('/navbar', function () {
//     return view('components.Navbar');
// })->name('navbar');


