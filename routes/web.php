<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use SebastianBergmann\FileIterator\Factory;

Route::get('/', function (): Factory|View {
    return view('welcome');
});


Route::get('about', function (): Factory|View {
    return view('about');
});

Route::get('/contact', function (): string {
    return 'Contact Page!';
});

Route::get('/api', function (): array {
    return ['foo' => 'bar'];
});

Route::get('/services', function() {
    return view('services');
});