<?php

use Illuminate\Support\Facades\Route;
// creo la pagina principale
Route::get('/', function () {
    $title = 'Home';
    $links = ['Home', 'About', 'Services', 'Contact'];
    return view('home', compact( 'title', 'links'));
})->name('Home');

// creo la pagina per about
Route::get('/about', function () {
    $title = 'About';
    $links = ['Home', 'About', 'Services', 'Contact'];
    return view('about', compact('title', 'links'));
})->name('About');

// creo la pagina per services
Route::get('/services', function () {
    $title = 'Services';
    $links = ['Home', 'About', 'Services', 'Contact'];
    return view('services', compact('title', 'links'));
})->name('Services');

// creo la pagina per contact
Route::get('/contact', function () {
    $title = 'Contact';
    $links = ['Home', 'About', 'Services', 'Contact'];

    // dati generati casualmente da chatgpt
    $users = [
        ['name' => 'Mario Rossi', 'email' => 'mario.rossi@example.com'],
        ['name' => 'Luca Bianchi', 'email' => 'luca.bianchi@example.com'],
        ['name' => 'Giulia Verdi', 'email' => 'giulia.verdi@example.com'],
        ['name' => 'Francesca Neri', 'email' => 'francesca.neri@example.com'],
        ['name' => 'Paolo Gialli', 'email' => 'paolo.gialli@example.com']
    ];

    return view('contact', compact('title', 'links', 'users'));
})->name('Contact');