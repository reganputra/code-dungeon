<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/loginSiswa', function () {
    return view('loginSiswa');
});

Route::get('/loginDosen', function () {
    return view('loginDosen');
});

Route::get('/setting', function () {
    return view('setting');
});

Route::get('/selectLevel', function () {
    return view('selectLevel');
});

Route::get('/homeSiswa', function () {
    return view('homeSiswa');
});

Route::get('/setting', function () {
    return view('setting');
});
