<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'tasks' => [
        'Work on saas',
        'Walk norman',
        'Find a life'
    ]
]);

Route::view('/about', 'about');

Route::view('/contact', 'contact');
