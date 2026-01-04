<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use SebastianBergmann\FileIterator\Factory;

Route::get('/', function (): Factory|View {
    return view('home');
});


Route::get('about', function (): Factory|View {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
