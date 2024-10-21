<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // dati generati casualmente da chatgpt
     $users = [
        ['name' => 'Mario Rossi', 'email' => 'mario.rossi@example.com'],
        ['name' => 'Luca Bianchi', 'email' => 'luca.bianchi@example.com'],
        ['name' => 'Giulia Verdi', 'email' => 'giulia.verdi@example.com'],
        ['name' => 'Francesca Neri', 'email' => 'francesca.neri@example.com'],
        ['name' => 'Paolo Gialli', 'email' => 'paolo.gialli@example.com']
    ];
    $title = 'Home';
    $links = ['Home', 'About', 'Services', 'Contact'];
    return view('home', compact('users', 'title', 'links'));
})->name('Home');

Route::get('/about', function () {
    $title = 'About';
    $links = ['Home', 'About', 'Services', 'Contact'];
    return view('about', compact('title', 'links'));
})->name('About');

Route::get('/services', function () {
    $title = 'Services';
    $links = ['Home', 'About', 'Services', 'Contact'];
    return view('about', compact('title', 'links'));
})->name('Services');

Route::get('/contact', function () {
    $title = 'Contact';
    $links = ['Home', 'About', 'Services', 'Contact'];
    return view('about', compact('title', 'links'));
})->name('Contact');