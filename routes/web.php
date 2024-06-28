<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('blog',['title' => 'Blog']);
});

Route::get('/team', function () {
    return view('team',['title' => 'Team']);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});

Route::get('/signout', function () {
    return view('signout');
});

Route::get('/seting', function () {
    return view('seting',['title' => 'Riset Password']);
});

